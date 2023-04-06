<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index(News $news)
    {

        dd($news->getNews());
        return view('pages.main');
    }
}
