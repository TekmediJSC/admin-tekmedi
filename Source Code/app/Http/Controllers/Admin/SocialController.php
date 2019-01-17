<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Variable;

class SocialController extends Controller {
    public function index() {
        $vars = json_decode(Variable::getByKey('social'));
        return view('admin.socials.index')->with([
            'vars' => $vars
        ]);
    }

    public function update(Request $request) {
        $this->validate($request, \App\Request\Admin\Social::rules());
        $item = Variable::find('social');
        $item->update(['value' => json_encode([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'skype' => $request->skype,
        ])]);
        return redirect()->route('admin.socials')->withSuccess('Đã cập nhật thành công');
    }
}
