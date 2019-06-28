<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Support\Facades\View;

class HomeController extends Controller {
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$purchased_courses = NULL;
		if (\Auth::check()) {
			$purchased_courses = Course::whereHas('students', function ($query) {
				$query->where('id', \Auth::id());
			})
				->with('lessons')
				->orderBy('id', 'desc')
				->get();
		}
		$courses = Course::where('published', 1)->orderBy('id', 'desc')->get();
		view::share('courses');
		return view('index')->with('courses', $courses)->with('purchased_courses');
	}
}
