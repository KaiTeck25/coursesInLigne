<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Course;
use App\Models\Episode;
use Illuminate\Http\Request;
use App\Youtube\YoutubeServices;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\StoreCourseWithEpisodes;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::with('user')
            ->select('courses.*', DB::raw(
                '(SELECT COUNT(DISTINCT(user_id))
            FROM completions
            INNER JOIN episodes ON completions.episode_id = episodes.id
            WHERE episodes.course_id = courses.id
            ) AS participants'
            ))->addSelect(DB::raw(
                '(SELECT SUM(duration)
            FROM episodes
            WHERE episodes.course_id = courses.id
            ) AS total_duration'
            ))
            ->withCount('episodes')->latest()->paginate(5);

        return Inertia::render('Courses/Index', [
            'courses' => $courses
        ]);
    }

    public function show(int $id)
    {
        $course = Course::where('id', $id)->with('episodes')->first();
        $watched = auth()->user()->episodes;

        return Inertia::render('Courses/Show', [
            'course' => $course,
            'watched' => $watched
        ]);
    }

    public function store(Request $request)
    {
        $courseData = $request->except('episodes', 'image'); // Get course data without episodes and image
    
        // Store the uploaded image and get its path
        $path = '';
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
        }
        
        // Update the course data with the image path
        $courseData['path'] = $path ? $path : 'images/noImage.jpeg';
        // dd($courseData);
        // Create the course
        $course = Course::create($courseData);
        // dd($course);
        // Get episodes from the request
        $episodes = $request->input('episodes');
    
        // Create episodes associated with the course
        foreach ($episodes as $episode) {
            $episode['course_id'] = $course->id;
            Episode::create($episode);
        }
    
        return redirect()->route('courses.index')->with('success', 'Félicitations, votre formation a bien été postée.');
    }
    
    

    public function edit(int $id)
    {
        $course = Course::where('id', $id)->with('episodes')->first();
        $this->authorize('update', $course);

        return Inertia::render('Courses/Edit', [
            'course' => $course
        ]);
    }

    public function update(StoreCourseWithEpisodes $request)
    {
        $course = Course::where('id', $request->id)->first();
        $this->authorize('update', $course);
        $course->update($request->all());
        $course->episodes()->delete();

        foreach ($request->episodes as $episode) {
            $episode['course_id'] = $course->id;
            Episode::create($episode);
        }

        return Redirect::route('courses.index')->with('success', 'Félicitations, votre formation a bien été modifiée.');
    }

    public function toggleProgress(Request $request)
    {
        $id = $request->input('episodeId');
        $user = auth()->user();

        $user->episodes()->toggle($id);

        return $user->episodes;
    }

    public function welcome()
    {
        $courses = Course::all();

        return view('client.index', ['courses' => $courses]);
    }

    public function allCourses()
    {
        $courses = Course::all();

        return view('client.courses', ['courses' => $courses]);
    }

    public function login()
    {
        return view('client.login');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function courseDetails(Request $request)
    {
        $courseId = $request->query('id'); // Récupérer l'ID du cours depuis la requête

        // Récupérer le cours avec l'ID correspondant
        $course = Course::findOrFail($courseId);
    
        // Vérifier si la collection d'épisodes est vide
        if ($course->episodes->isEmpty()) {
            $firstEpisodeVideoUrl = null;
        } else {
            // Récupérer l'URL de la vidéo du premier épisode s'il existe
            $firstEpisode = $course->episodes->first();
            $firstEpisodeVideoUrl = $firstEpisode->video_url ?? null;
        }
        // dd($firstEpisodeVideoUrl);
        return view('client.course-details', compact('course', 'firstEpisodeVideoUrl'));
    }

    public function blog()
    {
        return view('client.blog');
    }

    public function blogDetails()
    {
        return view('client.blog-details');
    }
}
