<?php

namespace App\Http\Controllers;

use App\Course;
use App\Lesson;
use App\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CompilerController extends Controller {
	public function index() {
		$compiler['output'] = "";
		$compiler['code'] = "public class moeez {\n	public static void main(String[] args) {
		 testing t=new testing();
		 t.test(); \n } \n }:,: \npublic class testing {
	public void test(){
   		System.out.println(\"Hello Worlds\");
   	}
 }";
		$courses = Course::where('published', 1)->orderBy('id', 'desc')->get();
		view::share('courses');

		return view('Compiler.index', ['compiler' => $compiler]);
	}
	public function create() {
		//
		return view('Tutorial.index');
	}
	public function store(Request $request) {

		$tryit_code = $request->get('code');
		exec("java -jar ~/NetBeansProjects/JavaApplication7/dist/JavaApplication7.jar '{$tryit_code}' 'Hello,testing' ", $out);
		$compiler['output'] = implode("\n", $out);
		$compiler['code'] = $tryit_code;
		try {

			file_exists('~/NetBeansProjects/JavaApplication7/dist/JavaApplication7.jar');
		} catch (Exception $e) {
			throw new Exception($e, 400);
		}

		return view('Compiler.index', ['compiler' => $compiler]);

	}

	public function tryit(Request $request) {
		$lesson = Lesson::find($request->id);
		$compiler['output'] = "";
		\Log::debug($lesson);
		$compiler['code'] = $lesson->code;
		// return view('Tutorial.view', ['tutorial' => $tutorial]);

		return view('Compiler.index', ['compiler' => $compiler]);
	}

	public function edit(Tutorial $tutorial) {

	}
	public function update(Request $request, Tutorial $tutorial) {
		//
	}
	public function destroy(Tutorial $tutorial) {
		return redirect('/tutorials')->with('success', 'Tutorial has been deleted Successfully');
	}
}
