<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class NewsController extends Controller
{

    use NewsTrait;

    public function index() 
    {
        return view('news', [
            'newsList' => $this->getNews(),
        ]);
    }

    public function show(int $id): View
    {
        return view('show', [
            'news' => $this->getNews($id)
        ]);
    }

    public function addNews()
    {
        return view('addNews', []);
    }

}
?>

