<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
      <div class="col-md-12 px-0">
        <img src="{{$post->url_img}}" alt="" width="330" height="400px">
        <h3 class="display-8 fst-italic">{{__($post->short_description)}}</h3>
        <p class="lead my-3">{{__($post->full_description)}}</p>
        <p class="lead mb-0">{{$post->id}}</p>
      </div>
    </div>
  
  </main>