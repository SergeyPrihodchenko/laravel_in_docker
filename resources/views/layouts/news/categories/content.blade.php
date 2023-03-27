<main role="main" class="container">
    <div class="my-3 p-3 bg-white rounded box-shadow">
      @foreach ($categories as $item)
          <a href="/category/{{$item['id']}}">
              <div class="media text-muted pt-3">
                  <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                  <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                  {{$item['name']}}
                  </p>
              </div>
          </a>
      @endforeach
      <small class="d-block text-right mt-3">
      </small>
    </div>
  </main>