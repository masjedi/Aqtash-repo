<?php

namespace App\Http\Controllers;

use App\Course;
use App\Category;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.course_list', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Category for the dropdown
        $categories = Category::all();
        $teachers = Teacher::all();
        return view('admin.course',compact('categories' , 'teachers'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // File path
        $file = $request->file('course_photo');
        $filename = time().'_'. $file->getClientOriginalName();
        $path = public_path().'/images/course';
        $file->move($path,$filename);

        $course = new Course();
        $course->course_title = $request->input('course_title');
        $course->course_duration  = $request->input('course_duration');
        $course->course_code  = $request->input('course_code');
        $course->course_detail  = $request->input('course_detail');
        $course->course_price  = $request->input('course_price');
        $course->course_photo = $filename;
        $course->category()->associate($request->input('category_id'));
        $course->teacher()->associate($request->input('teacher_id'));
        $course->save();
        return redirect()->to('/alsa/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $courses = Course::with('video')->where('id',$id)->get();
        $courses = Course::where('id',$id)->get();
        return view('admin.course_show',compact('courses'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $teachers = Teacher::all();
        $course = Course::findOrFail($id);
        Return view('admin.course_update', compact('course', 'categories','teachers'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        if ($file = $request->hasFile('course_photo')) {
            $courseImage = public_path("images/course/{$course->course_photo}"); // get previous image from folder
            if (File::exists($courseImage)) { // unlink or remove previous image from folder
                unlink($courseImage);
            }
            $file = $request->file('course_photo');
            $name = time() . $file->getClientOriginalName();
            $file = $file->move(('images/course/'), $name);
            $teachers->course_photo = $name;
        }
        $course->course_title = $request->input('course_title');
        $course->course_duration = $request->input('course_duration');
        $course->course_price = $request->input('course_price');
        $course->course_code = $request->input('course_code');
        $course->course_detail = $request->input('course_detail');
        $course->category()->associate($request->input('category_id'));
        $course->teacher()->associate($request->input('teacher_id'));
        $course->save();
        return redirect()->to('alsa/course');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Category::findOrFail($id);
        $course->delete();
        return redirect()->back();

    }
    public function video($id)
    {
        $videos = DB::table('courses')
            ->join('videos','videos.course_id','=','courses.id')
            ->select('videos.*')
            ->where('courses.id','=', $id)
            ->get();
        // $videos = Course::with('video')->where('id',$id)->get();
        return view('admin.course_video',compact('videos'));
    }
}
