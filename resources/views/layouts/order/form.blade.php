<div class="container-comment-form">
    <form class="form-signin" action="{{Route('orderCreate')}}" method="POST">
        @csrf
        <div class="">
            <input name="full_name" type="text" id="inputText" class="form-control" placeholder="Имя Фамилия" required autofocus>
            <input name="phone" type="phone" id="inputText" class="form-control" placeholder="Номер телефона" required autofocus>
            <input name="email" type="email" id="inputText" class="form-control" placeholder="Email" required autofocus>
        </div>
        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Ваш комментарий</label>
            <textarea name="description" class="form-control " id="validationTextarea" placeholder="Комментарий" required></textarea>
            <div class="invalid-feedback">
              Please enter a text.
            </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить заказ</button>
    </form>
</div>