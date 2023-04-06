<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <form class="form-signin">
              <label for="inputEmail" class="sr-only">Name</label>
              <input type="name" id="inputName" class="form-control" placeholder="Ваше имя" required>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Введиете ваш комментарий" id="floatingTextarea"></textarea>
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
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <a class="nav-link" href="{{route('main')}}">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Категории</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admPanel')}}">Административная панель</a>
            </li>
          </ul>
        </div>
      </div>
    </header>