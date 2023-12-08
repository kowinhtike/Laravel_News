<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index(){
        $news = News::all();
        return view("news.index",["news" => $news]);
    }

    public function create(){
        return view("news.create");
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3|max:255',
            'body' => 'required|min:3|max:10000',
            'image' => 'required',
        ]);
        $new = new News();
        $new->title = $request->title;
        $new->body = $request->body;
        $imagefile = $request->file('image');
        $getImageName = $imagefile->hashName();
        $imagefile->storeAs("public",$getImageName);
        $new->image_url = $getImageName;
        $new->save();

        return back()->with("success","New created successfully");
    }
    
}
