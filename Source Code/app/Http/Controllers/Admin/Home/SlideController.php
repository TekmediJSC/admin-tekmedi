<?php

namespace App\Http\Controllers\Admin\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class SlideController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $slides = Item::slides()->get();
        return view('admin.home.slides.index')->with([
            'slides' => $slides,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.home.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, \App\Request\Admin\Home\Slide::rules());
        Item::create(array_merge(['type' => Item::SLIDE], $request->all()));
        return back()->withSuccess('Đã thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $item = Item::slides()->findOrFail($id);
        return view('admin.home.slides.edit')->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, \App\Request\Admin\Home\Slide::rules());
        $item = Item::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.home_slides.index')->withSuccess('Đã cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Item::destroy($id);
        return back()->withSuccess('Đã xóa thành công');
    }
}
