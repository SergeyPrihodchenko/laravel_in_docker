<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{

    use NewsTrait;

    public function index() 
    {
        return view('news.index', [
            'newsList' => $this->getNews()
        ]);
    }

    public function show(int $id): View
    {
        return view('news.show', [
            'news' => $this->getNews($id)
        ]);
    }

}
?>

