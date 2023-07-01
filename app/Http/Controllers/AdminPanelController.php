<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Comments;
use App\Models\News;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPanelController extends Controller
{
    public function index() 
    {
        return view('pages.adminPanel.adminPanel', []);
    }
    public function deletedView($tables) 
    {
        switch ($tables) {
            case 'news':
                $title = 'Новости';
                $titlePage = 'news';
                $dataTable = DB::table('news')->get();
                $data = [];
                $collection = [];
                $route = 'admPanel';
                foreach($dataTable as $item) {
                    $data[] = ['id' => $item->id, 'name' => $item->name, 'description' => $item->short_description];
                    $collection = \collect($data);
                }
                return view('pages.adminPanel.deletePanel', ['data' => $collection, 'title' => $title, 'route' => $route, 'titlePage' => $titlePage]);
                break;
            case 'category':
                $dataTable = DB::table('categories')->get();
                $title = 'Категории';
                $titlePage = 'category';
                $data = [];
                $collection = [];
                $route = 'admPanel';
                foreach($dataTable as $item) {
                    $data[] = ['id' => $item->id, 'name' => $item->name];
                    $collection = \collect($data);
                }
                return view('pages.adminPanel.deletePanel', ['data' => $collection, 'title' => $title, 'route' => $route, 'titlePage' => $titlePage]);
                break;
            case 'orders':
                $news = DB::table('orders_news')->get();

                return view('pages.adminPanel.deletePanel', []);
                break;
            case 'comments':
                $dataTable = DB::table('comments')->get();
                $title = 'Комментарии';
                $titlePage = 'comments';
                $data = [];
                $collection = [];
                $route = 'admPanel';
                foreach($dataTable as $item) {
                    $data[] = ['id' => $item->id, 'name' => $item->name, 'description' => $item->text];
                    $collection = \collect($data);
                }
                return view('pages.adminPanel.deletePanel', ['data' => $collection, 'title' => $title, 'route' => $route, 'titlePage' => $titlePage]);
                break;
            
            default:
            return view('pages.adminPanel.deletePanel', []);
                break;
        }
    }

    public function deletedNews($id, News $news) 
    {
        $newsRow = $news::find($id);
        $newsRow->delete();
        return \redirect('admPanel/delete/news');
    }
    public function deletedCategory($id, Categories $category) 
    {
        $newsRow = $category::find($id);
        $newsRow->delete();
        return \redirect('admPanel/delete/category');
    }
    public function deletedComments($id, Comments $comments) 
    {
        $newsRow = $comments::find($id);
        $newsRow->delete();
        return \redirect('admPanel/delete/comments');
    }

    public function updateView($table, News $news, Categories $categogry)
    {
        switch ($table) {
            case 'news':
                $dataPage = $news::query()->get();
                dd($dataPage);
                break;
            case 'category':
                # code...
                break;
            case 'orders':
                # code...
                break;
            case 'comments':
                # code...
                break;
            
            default:
                # code...
                break;
        }
    }
}
