<?php

namespace App\Http\Controllers;

use App\Models\About;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $about = About::all();
       
        return view("admin", compact("about"));
}

}
