<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CommentModel extends Model
{
    use HasFactory;

    public function createComment(Request $request)
    {
        return dd($request->all());
    }
}
