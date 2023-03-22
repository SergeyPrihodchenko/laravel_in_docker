<?php

namespace App\Http\Controllers;

use App\Models\News\CategoryNews;

class CategoryController extends Controller
{

    use NewsTrait;

    private CategoryNews $category;

    public function __construct()
    {
        $this->category = new CategoryNews();
    }


    public function category() {
        return view('categories.category', [
            'categories' => $this->category->getCategory()
        ]);
    }

    public function news(int $categoryID) 
    {

        $arr = [];

        foreach($this->category->getCategorySortById($categoryID) as $el) {
            $arr[] = $this->sortNews($el);
        }

        return view('categories.sortNews', ['dataNews' => $arr]);
    }


    private function sortNews($id)
    {
        return $this->getNews((int)$id);
    }
}
