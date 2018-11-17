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

    public function page(Request $request, $slug)
    {
        $page = Page::whereSlug($slug)
                    ->first();

        return view('pages.static', compact('page'));
    }
}
