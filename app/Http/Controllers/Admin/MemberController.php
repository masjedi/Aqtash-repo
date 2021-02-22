<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('admin.member_show', compact('members'));
    }

   
    public function create()
    {
        return  view('admin.member');
    }

   
    public function store(Request $request)
    {
       
        $pro_file = $request->file('image');
        $filename = time().'_'. $pro_file->getClientOriginalName();
        $path = public_path().'/admin/member';
        $pro_file->move($path,$filename);

        $members = new Member();
        $members->language = $request->input('language');
        $members->name = $request->input('name');
        $members->detail = $request->input('detail');
        $members->image = $filename;
        $members->save();
        return redirect()->to('/admin/member');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $members = Member::findOrFail($id);
        Return view('admin.member_edit', compact('members'));
    }

   
    public function update(Request $request, $id)
    {
        $members = Member::findOrFail($id);

        if ($file = $request->hasFile('image')) {
            $agendafile = public_path("admin/member/{$members->image}"); // get previous image from folder
            if (File::exists($agendafile)) { // unlink or remove previous image from folder
                unlink($agendafile);
            }
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $file = $file->move(('admin/member/'), $name);
            $members->image = $name;
        }
        $members->name = $request->input('name');
        $members->detail = $request->input('detail');
        $members->save();
        return redirect()->to('/admin/member');
    }


    public function destroy($id)
    {
        $members = Member::findOrFail($id);
        $members->delete();
        return redirect()->back();
    }
}
