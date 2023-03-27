<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function testFile()
    {      
        $arr = json_decode(Storage::get('/test.json'), true);
        return view('file', ['data' => $arr]);
    }
}
