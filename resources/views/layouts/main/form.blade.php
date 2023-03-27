<div class="container-comment-form">
    <form class="form-signin" action="{{route('addComment')}}" method="POST">
        @csrf
        <div class="">
            <input name="first_name" type="text" id="inputText" class="form-control" placeholder="Имя" required autofocus>
            <input name="last_name" type="text" id="inputText" class="form-control" placeholder="Фамилия" required autofocus>
        </div>
        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Ваш комментарий</label>
            <textarea name="description" class="form-control " id="validationTextarea" placeholder="Комментарий" required></textarea>
            <div class="invalid-feedback">
              Please enter a text.
            </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Оставить комментарий</button>
    </form>
</div>