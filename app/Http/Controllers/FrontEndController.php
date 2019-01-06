<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class FrontEndController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function page(Page $page)
    {
        return view('pages.static', compact('page'));
    }
}
