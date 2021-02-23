<?php

namespace App\Http\Controllers;
use App\Event;
use App\Teacher;
use Illuminate\Http\Request;
use App\Course;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->language = \LaravelLocalization::getCurrentLocale() == 'en' ? 'English' : (\LaravelLocalization::getCurrentLocale() == 'fa' ? 'دری' : 'Pashto');

    }
    public function index()
    {
        $courses = Course::all();
        $events = Event::all();
        return view ('welcome',compact('courses','events'));
    }
    public function teacher()
    {
        $teachers = Teacher::all();
        return view ('teacher', compact('teachers'));
    }
    public function about()
    {
        return view ('about');
    }
  public function course()
  {
      $courses = Course::all();
      return view('course',compact('courses'));
  }
  public function blog()
  {
      return view('blog');
  }
  public function contact()
  {
      return view('contact');
  }
  public function courseDetail($id)
  {
      $courses = Course::where('id', $id)->get();
      return view('course_detail', compact('courses'));
  }
}
