<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {

        $allPosts = DB::table('postblog')->get();

        return view('home', compact('allPosts'));
    }
}
