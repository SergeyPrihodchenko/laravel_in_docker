<div class="jumbotron">
    @foreach ($commentsData as $comment)
        <h1 class="display-4">{{__($comment->name)}}</h1>
        <p class="lead">{{__($comment->text)}}</p>
        <p class="lead">
        {{__(strval($comment->created_at))}}
        </p>
        <p><hr class="my-4"></p>
    @endforeach
  </div>