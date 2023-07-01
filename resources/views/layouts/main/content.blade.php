<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">

          @foreach ($dataNews as $news)
          <div class="col-md-4" id="{{$news->id}}">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="{{$news->url_img}}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">{{$news->short_description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="/show/{{$news->id}}">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </a>
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