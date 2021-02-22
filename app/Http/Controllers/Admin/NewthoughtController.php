<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Newthought;
use Illuminate\Http\Request;

class NewthoughtController extends Controller
{
    public function index()
    {
        $newthoughts = Newthought::all();
        return view('admin.newthought_show', compact('newthoughts'));
    }

   
    public function create()
    {
        return  view('admin.newthought');
    }

   
    public function store(Request $request)
    {
       
        $pro_file = $request->file('image');
        $filename = time().'_'. $pro_file->getClientOriginalName();
        $path = public_path().'/admin/newthought';
        $pro_file->move($path,$filename);

        $newthoughts = new Newthought();
        $newthoughts->language = $request->input('language');
        $newthoughts->name = $request->input('name');
        $newthoughts->detail = $request->input('detail');
        $newthoughts->image = $filename;
        $newthoughts->save();
        return redirect()->to('/admin/newthought');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $newthoughts = Newthought::findOrFail($id);
        Return view('admin.newthought_edit', compact('newthoughts'));
    }

   
    public function update(Request $request, $id)
    {
        $newthoughts = Newthought::findOrFail($id);

        if ($file = $request->hasFile('image')) {
            $agendafile = public_path("admin/newthought/{$newthoughts->image}"); // get previous image from folder
            if (File::exists($agendafile)) { // unlink or remove previous image from folder
                unlink($agendafile);
            }
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $file = $file->move(('admin/newthought/'), $name);
            $newthoughts->image = $name;
        }
        $newthoughts->name = $request->input('name');
        $newthoughts->detail = $request->input('detail');
        $newthoughts->save();
        return redirect()->to('/admin/newthoughts');
    }


    public function destroy($id)
    {
        $newthoughts = Newthought::findOrFail($id);
        $newthoughts->delete();
        return redirect()->back();
    }
}
