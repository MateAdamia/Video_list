<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;

class ViController extends Controller
{
    function show()
    
    {
        $data=  Video::all();
        return view('list',['videos' => $data]);
    }
}
