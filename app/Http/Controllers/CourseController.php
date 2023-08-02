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

    public function store(StoreCourseWithEpisodes $request)
    {
        $course = Course::create($request->all());

        // Store the uploaded image and get its path
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
        } else {
            $path = ''; // Set a default value for the path if no image is uploaded.
        }

        // Update the 'path' value for the first episode with the original name
        $episodes = $request->input('episodes');
        if (count($episodes) > 0 && isset($episodes[0]['path']) && !empty($episodes[0]['path'])) {
            // Instead of setting the 'path' directly, use the file path obtained above
            $episodes[0]['path'] = $path;
        }

        foreach ($episodes as $episode) {
            $episode['course_id'] = $course->id;
            Episode::create($episode);
        }

        dd($request);

        return Redirect::route('courses.index')->with('success', 'Félicitations, votre formation a bien été postée.');
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
        return view('client.courses');
    }

    public function login()
    {
        return view('client.login');
    }

    public function contact()
    {
        return view('client.contact');
    }
    public function courseDetails()
    {
        return view('client.course-details');
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
