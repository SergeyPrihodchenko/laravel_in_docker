<main role="main">

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          @foreach ($newsList as $news)
          <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{$news['image']}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">{{$news['description']}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/news/show/{{$news['id']}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>

  </main>