<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'video_url', 'course_id', 'duration'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

        public function users()
    {
        return $this->belongsToMany(User::class, 'completions', 'episode_id', 'user_id');
    }
}