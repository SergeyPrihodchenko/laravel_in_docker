<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <form class="form-signin" action="{{route("createComment")}}" method="POST">
              @csrf
              <label for="inputEmail" class="sr-only">Name</label>
              <input name="name" type="name" id="inputName" class="form-control" placeholder="Ваше имя" required>
              <div class="form-floating">
                <textarea name="text" class="form-control" placeholder="Введиете ваш комментарий" id="floatingTextarea"></textarea>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
            </form>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader">
            <strong>Оставить отзыв</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="{{Route('comments')}}">Комментарии</a>
          <a class="p-2 text-dark" href="{{Route('admPanel')}}">Административная панель</a>
        </nav>
      </div>
    </header>