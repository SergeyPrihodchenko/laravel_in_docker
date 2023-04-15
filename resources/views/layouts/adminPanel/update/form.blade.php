<form class="form-signin" action="{{route("createComment")}}" method="POST">
    @csrf
    <label for="inputEmail" class="sr-only">Name</label>
    <input name="name" type="name" id="inputName" class="form-control" placeholder="Ваше имя" required>
    <div class="form-floating">
      <textarea name="text" class="form-control" placeholder="Введиете ваш комментарий" id="floatingTextarea"></textarea>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
  </form>