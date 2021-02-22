<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $library = Library::all();
        return view('admin.library_show', compact('library'));
    }

   
    public function create()
    {

        return  view('admin.library');
    }

   
    public function store(Request $request)
    {
       
        $pro_file = $request->file('image');
        $filename = time().'_'. $pro_file->getClientOriginalName();
        $path = public_path().'/admin/library';
        $pro_file->move($path,$filename);

        $library = new Library();
        $library->language = $request->input('language');
        $library->name = $request->input('name');
        $library->author = $request->input('author');
        $library->path = $request->input('path');
        $library->image = $filename;
        $library->save();
        return redirect()->to('/admin/library');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $library = Library::findOrFail($id);
        Return view('admin.library_edit', compact('library'));
    }

   
    public function update(Request $request, $id)
    {
        $library = Library::findOrFail($id);

        if ($file = $request->hasFile('image')) {
            $agendafile = public_path("admin/library/{$library->image}"); // get previous image from folder
            if (File::exists($agendafile)) { // unlink or remove previous image from folder
                unlink($agendafile);
            }
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $file = $file->move(('admin/library/'), $name);
            $library->image = $name;
        }
        $library->name = $request->input('name');
        $library->author = $request->input('author');
        $library->path = $request->input('path');
        $library->save();
        return redirect()->to('/admin/library');
    }


    public function destroy($id)
    {
        $library = Library::findOrFail($id);
        $library->delete();
        return redirect()->back();
    }
}
