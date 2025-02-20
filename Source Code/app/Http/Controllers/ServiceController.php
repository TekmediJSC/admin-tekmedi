<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller {
    public function index($id) {
        $item = Service::findOrFail($id);
        return view('services.index')->with([
            'item' => $item
        ]);
    }
}
