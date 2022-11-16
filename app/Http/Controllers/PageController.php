<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPage(Request $request)
    {
        $user = $request;
        return view('FirstPage',compact('user'));
    }
    public function secondPage()
    {
        return view('secondPage');
    }
}
