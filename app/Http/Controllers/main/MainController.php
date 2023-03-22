<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\News\CategoryNews;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private CategoryNews $category;

    public function __construct()
    {
        $this->category = new CategoryNews();
    }
    public function main() 
    {
        return view('index', ['category_list' => $this->category->getCategory()]);
    }
}
