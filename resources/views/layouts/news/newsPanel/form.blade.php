<form class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Create post</h1>
    <input type="email" id="inputEmail" class="form-control" placeholder="Заголовок новости" required autofocus>
    <div class="mb-3">
      <label for="validationTextarea" class="form-label">Textarea</label>
      <textarea class="form-control " id="validationTextarea" placeholder="Краткое описание новости" required></textarea>
      <div class="invalid-feedback">
        Please enter a text.
      </div>
    </div>
    <div class="mb-3">
      <label for="validationTextarea" class="form-label">Textarea</label>
      <textarea class="form-control " id="validationTextarea" placeholder="Описание новости" required></textarea>
      <div class="invalid-feedback">
        Please enter a text.
      </div>
    </div>
    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Add post</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
  </form>