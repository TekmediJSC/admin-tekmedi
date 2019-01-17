<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\News;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $slides = Item::slides()->get();
        $services = Item::services()->get();
        $works = Item::works()->get();
        $chooses = Item::chooses()->get();
        $testimonials = Item::testimonials()->get();
        $news = News::orderBy('created_at', 'DESC')->take(3)->get();

        return view('home.index')->with([
            'slides' => $slides,
            'services' => $services,
            'works' => $works,
            'chooses' => $chooses,
            'testimonials' => $testimonials,
            'news' => $news
        ]);
    }
}
