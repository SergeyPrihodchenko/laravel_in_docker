<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index(News $news)
    {
        return view('pages.main', ['dataNews' => $news->getNews()]);
    }
}
