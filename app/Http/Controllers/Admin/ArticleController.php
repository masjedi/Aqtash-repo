<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.article_show', compact('articles'));
    }

   
    public function create()
    {
        $category = Category::all();
        return  view('admin.article', compact('category'));
    }

   
    public function store(Request $request)
    {
       
        $pro_file = $request->file('image');
        $filename = time().'_'. $pro_file->getClientOriginalName();
        $path = public_path().'/admin/article';
        $pro_file->move($path,$filename);

        $articles = new Article();
        $articles->language = $request->input('language');
        $articles->name = $request->input('name');
        $articles->detail = $request->input('detail');
        $articles->image = $filename;
        $articles->category()->associate($request->input('category_id'));
        $articles->save();
        return redirect()->to('/admin/art');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $articles = Article::findOrFail($id);
        Return view('admin.article_edit', compact('articles'));
    }

   
    public function update(Request $request, $id)
    {
        $articles = Article::findOrFail($id);

        if ($file = $request->hasFile('image')) {
            $agendafile = public_path("admin/article/{$articles->image}"); // get previous image from folder
            if (File::exists($agendafile)) { // unlink or remove previous image from folder
                unlink($agendafile);
            }
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $file = $file->move(('admin/article/'), $name);
            $articles->image = $name;
        }
        $articles->name = $request->input('name');
        $articles->detail = $request->input('detail');
        $articles->save();
        return redirect()->to('/admin/art');
    }


    public function destroy($id)
    {
        $articles = Article::findOrFail($id);
        $articles->delete();
        return redirect()->back();
    }
}
