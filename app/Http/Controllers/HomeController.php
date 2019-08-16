<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resturant;

class HomeController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $posts = Resturant::orderBy('id', 'desc')->paginate(10);
        return view('site.index',compact('posts'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function show($slug)
    {
        $post = Resturant::where('slug', $slug)->firstOrFail();
        return view('site.show', compact('post'));
    }
}