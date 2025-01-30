<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    function add_news() {
        return view('backend.addNews');
    }
    
    function all_news(){
        return view('backend.allNews');
    }
    function store_news(Request $request) {
        $request->validate([
            'news_title' => 'required|unique:news,news_title',
            'image' => 'required|mimes:webp,png,jpg,jpeg',
            'short_details' => 'required',
            'category' => 'required',

        ]);

        $image_name = str($request->news_title)->slug() . '.' . $request->image->extension();
        $upload = $request->image->storeAs('news_images', $image_name, 'public');

        // dd($upload);
        $news = new News();
        $news->news_title = $request->news_title;
        $news->slug = str($request->news_title)->slug();
        // $news->slug = Str::slug($request->news_title, '-', 'bn');
        $news->image = $upload;
        $news->short_details = $request->short_details;
        $news->long_details = $request->long_details;
        $news->category = $request->category;
        // dd($news);
        $news->save();

        if ($news) {
            notify()->success('News added successfully!', 'Success');
            return back();
        }

    }
}
