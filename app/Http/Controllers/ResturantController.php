<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resturant;

class ResturantController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $posts = Resturant::all();
        return view('resturants.index',compact('posts'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('resturants.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);

        Resturant::create($request->all());

        return redirect()->route('resturants.index');
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $post = Resturant::find($id);
        return view('resturants.show', compact('post'));
    }
}