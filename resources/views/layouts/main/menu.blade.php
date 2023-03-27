<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href="{{route('news')}}">News</a></h5>
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href="{{route('category')}}">Category</a></h5>
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href="{{route('addNews')}}">addNews</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
      @foreach ($category_list as $item)
      <a class="p-2 text-dark" id="{{$item['id']}}" href="category/{{$item['id']}}">{{$item['name']}}</a>
      @endforeach
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
  </div>