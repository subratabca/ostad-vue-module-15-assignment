<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SiteController extends Controller
{
    function Index(Request $request){
        return Inertia::render('Index');
    }
}
