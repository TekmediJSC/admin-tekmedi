<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsCategory;

class NewsController extends Controller {
    public function index(Request $request, $category = null) {
        $news = [];

        // filter by category
        if ($category != null) {
            NewsCategory::findOrFail($category);
            $news = News::where('news_category_id', $category);
        } else {
            $news = News::with('category');
        }

        // filter by search keyword
        if ($request->s) {
            $news->where(function ($query) use ($request) {
                $query->where('title', 'like', "%{$request->s}%");
                $query->where('short_description', 'like', "%{$request->s}%");
                $query->orWhere('content', 'like', "%{$request->s}%");
            });
        }
        $news = $news->orderBy('created_at', 'DESC')->with('category')->paginate(10);

        $categories = NewsCategory::all();
        return view('news.index')->with([
            'news' => $news,
            'categories' => $categories,
            'category' => NewsCategory::find($category),
            'recent' => News::orderBy('created_at', 'desc')->take(5)->get(),
            'keyword' => $request->s
        ]);
    }

    public function detail($id) {
        $news = News::findOrFail($id);
        $categories = NewsCategory::all();
        $news->increment('views');
        return view('news.detail')->with([
            'news' => $news,
            'categories' => $categories,
            'recent' => News::orderBy('created_at', 'desc')->take(5)->get()
        ]);
    }
}
