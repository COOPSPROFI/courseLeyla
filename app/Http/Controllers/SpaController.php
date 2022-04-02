<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Review;

class SpaController extends Controller
{
    public function index() {
        $reviews = Review::orderBy('id', 'desc')->paginate(3);
        $courses = Course::all();
        return view('index', compact('reviews', 'courses'));
    }
}
