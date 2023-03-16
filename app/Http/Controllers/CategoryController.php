<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{

    use NewsTrait;

    public function category() {
        return view('categories.category', [
            'categories' => [
                1 => ['id' => 1, 'name' => 'Технологии'],
                2 => ['id' => 2, 'name' => 'Экономика'],
                3 => ['id' => 3, 'name' => 'Политика']
                ]
        ]);
    }

    public function news(int $categoryID) 
    {

        $categoryArr = [
            1 => [1,3,5],
            2 => [2,4,6],
            3 => [0,7,8]
        ];

        $arr = [];

        foreach($categoryArr[$categoryID] as $el) {
            $arr[] = $this->sortNews($el);
        }

        return view('categories.sortNews', ['dataNews' => $arr]);
    }


    private function sortNews($id)
    {
        return $this->getNews($id);
    }
}
