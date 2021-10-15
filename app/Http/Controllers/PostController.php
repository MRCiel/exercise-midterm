<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return "Executed successfully";
    }

    public function select()
    {
        $result = DB::select("SELECT * FROM posts Order BY posted_at ASC");
        return view('all.all', ['posts' => $result]);
    }

    public function gaming()
    {
        $result = DB::select("SELECT * FROM posts WHERE category ='Gaming'Order BY posted_at ASC");
        return view('all.gaming', ['posts' => $result]);
    }

    public function technology()
    {
        $result = DB::select("SELECT * FROM posts WHERE category ='Technology'Order BY posted_at ASC");
        return view('all.technology', ['posts' => $result]);
    }

    public function life()
    {
        $result = DB::select("SELECT * FROM posts WHERE category ='Life' Order BY posted_at ASC");
        return view('all.life', ['posts' => $result]);
    }

    public function show($id = "")
    {
        $result = DB::select("SELECT * FROM posts WHERE id= '$id' ");
        return view('layout.post', ['posts' => $result]);
    }
}
