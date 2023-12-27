<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(){
        return view('client.compress.home');
    }

    public function upload(Request $request)
    {



    }



}
