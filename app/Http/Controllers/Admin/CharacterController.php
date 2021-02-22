<?php

namespace App\Http\Controllers\Admin;

use App\Character;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view('admin.character_show', compact('characters'));
    }

   
    public function create()
    {
        return  view('admin.character');
    }

   
    public function store(Request $request)
    {
       
        $pro_file = $request->file('image');
        $filename = time().'_'. $pro_file->getClientOriginalName();
        $path = public_path().'/admin/character';
        $pro_file->move($path,$filename);

        $characters = new Character();
        $characters->language = $request->input('language');
        $characters->name = $request->input('name');
        $characters->detail = $request->input('detail');
        $characters->image = $filename;
        $characters->save();
        return redirect()->to('/admin/char');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $characters = Character::findOrFail($id);
        Return view('admin.character_edit', compact('characters'));
    }

   
    public function update(Request $request, $id)
    {
        $characters = Character::findOrFail($id);

        if ($file = $request->hasFile('image')) {
            $agendafile = public_path("admin/character/{$characters->image}"); // get previous image from folder
            if (File::exists($agendafile)) { // unlink or remove previous image from folder
                unlink($agendafile);
            }
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $file = $file->move(('admin/character/'), $name);
            $characters->image = $name;
        }
        $characters->name = $request->input('name');
        $characters->detail = $request->input('detail');
        $characters->save();
        return redirect()->to('/admin/char');
    }


    public function destroy($id)
    {
        $characters = Character::findOrFail($id);
        $characters->delete();
        return redirect()->back();
    }
}
