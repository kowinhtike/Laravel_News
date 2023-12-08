<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function show($id){
        $new = News::find($id);
        return view('news.show',['new' => $new]);
    }

    public function edit($id){
        $new = News::find($id);
        return view("news.edit",["new" => $new]);
    }

    public function update(Request $request,$id){
        
        $request->validate([
            'title' => 'required|min:3|max:255',
            'body' => 'required|min:3|max:10000',
        ]);
        $new = News::find($id);
        $new->title = $request->title;
        $new->body = $request->body;
        if($request->file('image')){
            //delete the previous image storage
            Storage::delete("public/".$new->image_url);
            $image = $request->file('image');
            $imgName = $image->hashName();
            $image->storeAs('public',$imgName);
            $new->image_url = $imgName;
        }
        $new->save();
        return to_route('news-index')->with('success',"Blog updated successfully");
    }
    
    public function destroy($id){
        $new = News::where("id",$id)->first();
        Storage::delete("public/".$new->image_url);
        $new->delete();
        return to_route('news-index')->with('success',"Blog deleted successfully");
    }
}
