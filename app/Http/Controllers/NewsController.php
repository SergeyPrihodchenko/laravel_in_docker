<?php

namespace App\Http\Controllers;

use App\Models\News\CategoryNews;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function addNews(Request $request, CategoryNews $category)
    {
        return view('addNews', ['category' => $category->getCategory()]);
    }

    public function store(Request $request)
    {
        $arr = [
            'category' => $request->input('category'),
            'name' => $request->input('name_news'),
            'low_description' => $request->input('description_low'),
            'full_description' => $request->input('description')
        ];
        $jsonFile = json_decode(Storage::get('/test.json'), true);
        $jsonFile[] = $arr;
        $jsonFile = json_encode($jsonFile);
        Storage::put('/test.json', $jsonFile);
        return redirect('/testFile');
    }
}
?>