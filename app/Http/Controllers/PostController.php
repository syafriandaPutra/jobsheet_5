<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
}
public function index()
{
    $Post::all();
    return response()->json(['data'=>post]);
}
