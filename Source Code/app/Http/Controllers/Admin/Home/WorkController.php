<?php

namespace App\Http\Controllers\Admin\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class WorkController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $works = Item::works()->get();
        return view('admin.home.works.index')->with([
            'works' => $works,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.home.works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, \App\Request\Admin\Home\Work::rules());
        Item::create(array_merge(['type' => Item::WORK], $request->all()));
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
        $item = Item::works()->findOrFail($id);
        return view('admin.home.works.edit')->with([
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
        $this->validate($request, \App\Request\Admin\Home\Work::rules());
        $item = Item::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.home_works.index')->withSuccess('Đã cập nhật thành công');
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
