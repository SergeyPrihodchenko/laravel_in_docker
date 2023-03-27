<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Main\CommentModel;
use App\Models\News\CategoryNews;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private CategoryNews $category;
    private CommentModel $comment;

    public function __construct()
    {
        $this->category = new CategoryNews();
        $this->comment = new CommentModel();
    }
    public function main() 
    {
        return view('index', ['category_list' => $this->category->getCategory()]);
    }

    public function addComment(Request $request) 
    {
        $this->comment->createComment($request);
    }
}
