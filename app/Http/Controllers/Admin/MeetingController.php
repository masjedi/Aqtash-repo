<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Meeting;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Mention\Mention;

class MeetingController extends Controller
{
    public function index()
    {
        $meetings = Meeting::all();
        return view('admin.meeting_show', compact('meetings'));
    }

   
    public function create()
    {
    
        return  view('admin.meeting');
    }

   
    public function store(Request $request)
    {
        $meetings = new Meeting();
        if($request->hasFile('images')){
            foreach ($request->file('images') as $image){
                $name = time().'_'.$image->getClientOriginalName();
                $image->move(public_path().'\admin\event',$name);
                $data[] =$name;
            }
            $meetings->images = json_encode($data);

        }
       
        $meetings->language = $request->input('language');
        $meetings->name = $request->input('name');
        $meetings->detail = $request->input('detail');
       // $meetings->images = $filename;
        $meetings->save();
        return redirect()->to('/admin/meet');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $meetings = Meeting::findOrFail($id);
        Return view('admin.meeting_edit', compact('meetings'));
    }

   
    public function update(Request $request, $id)
    {
        $meetings = Meeting::findOrFail($id);

        if ($file = $request->hasFile('images')) {
            $agendafile = public_path("admin/meeting/{$meetings->image}"); // get previous image from folder
            if (File::exists($agendafile)) { // unlink or remove previous image from folder
                unlink($agendafile);
            }
            $file = $request->file('images');
            $name = time() . $file->getClientOriginalName();
            $file = $file->move(('admin/meeting/'), $name);
            $meetings->image = $name;
        }
        $meetings->name = $request->input('name');
        $meetings->detail = $request->input('detail');
        $meetings->save();
        return redirect()->to('/admin/meet');
    }


    public function destroy($id)
    {
        $meetings = Meeting::findOrFail($id);
        $meetings->delete();
        return redirect()->back();
    }
}
