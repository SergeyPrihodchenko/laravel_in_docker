<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    public function getNews() 
    {
        return DB::table('news')->get();
    }

    public function getShowNews($id)
    {
        return DB::table('news')->where('id', $id)->first();
    }
}
