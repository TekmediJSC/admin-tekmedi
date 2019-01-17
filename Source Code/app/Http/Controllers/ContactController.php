<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactCard;
use App\Contact;

class ContactController extends Controller {
    public function index() {
        $cards = ContactCard::all();
        return view('contact.index')->with([
            'cards' => $cards
        ]);
    }

    public function post(Request $request) {
        $this->validate($request, \App\Request\Contact::rules());
        Contact::create($request->all());
        return back()->withSuccess('Nội dung liên hệ của bạn đã được gửi thành công!');
    }
}
