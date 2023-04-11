<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index(Comments $comments)
    {
        return view('pages.comments', ['commentsData' => $comments::query()->get()]);
    }

    public function createComment()
    {

        $data = \request()->all();
        unset($data['_token']);
        Comments::create($data);
        return redirect('/comments');
    }
}
