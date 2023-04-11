<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ShowPageController extends Controller
{
    public function index(News $news, $id)
    {
        $post = $news->getShowNews($id);
        return view('pages.showPage', ['post' => $post]);
    }

}
