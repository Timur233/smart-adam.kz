<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class PagesController extends Controller
{
    public function index($page_slug)
    {
        $page = Pages::where('slug', $page_slug)->first();

        if ($page === null): return
            abort(404);
        endif;

        return view('page');
    }
}
