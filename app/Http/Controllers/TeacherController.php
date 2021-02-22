<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teacher_list', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher');
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
        $pro_file = $request->file('teacher_image');
        $filename = time().'_'. $pro_file->getClientOriginalName();
        $path = public_path().'/images/teacher';
        $pro_file->move($path,$filename);

        $teacher = new Teacher();
        $teacher->teacher_name = $request->input('teacher_name');
        $teacher->teacher_last_name = $request->input('teacher_last_name');
        $teacher->teacher_degree = $request->input('teacher_degree');
        $teacher->teacher_email = $request->input('teacher_email');
        $teacher->teacher_detail = $request->input('teacher_detail');
        $teacher->teacher_image = $filename;
        $teacher->save();
        return redirect()->to('alsa/teacher');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teachers = Teacher::where('id',$id)->get();
        return view('admin.teacher_show', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('admin.teacher_update', compact('teachers'));
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
        $teachers = Teacher::findOrFail($id);

        if ($file = $request->hasFile('teacher_image')) {
            $teacherImage = public_path("images/teacher/{$teachers->teacher_image}"); // get previous image from folder
            if (File::exists($teacherImage)) { // unlink or remove previous image from folder
                unlink($teacherImage);
            }
            $file = $request->file('teacher_image');
            $name = time() . $file->getClientOriginalName();
            $file = $file->move(('images/teacher/'), $name);
            $teachers->teacher_image = $name;
        }
        $teachers->teacher_name = $request->input('teacher_name');
        $teachers->teacher_last_name = $request->input('teacher_last_name');
        $teachers->teacher_degree = $request->input('teacher_degree');
        $teachers->teacher_email = $request->input('teacher_email');
        $teachers->teacher_detail = $request->input('teacher_detail');
        $teachers->save();
        return redirect()->to('/alsa/teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachers = Teacher::findOrFail($id);
        $teachers->delete();
        return redirect()->back();
    }
}
