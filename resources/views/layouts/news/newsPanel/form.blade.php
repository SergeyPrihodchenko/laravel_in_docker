<form class="form-signin" action="{{route('store')}}" method="POST">
  @csrf
    <h1 class="h3 mb-3 font-weight-normal">Create post</h1>
    <select class="form-select" style="margin-bottom: 10px" aria-label="Default select example" name="category">
      <option selected>Категории</option>
      @foreach($category as $el)
      <option value="{{__($el['name'])}}" id="{{__($el['id'])}}">{{__($el['name'])}}</option>
      @endforeach
    </select>
    <input name="name_news" type="text" id="inputText" class="form-control" placeholder="Заголовок новости" required autofocus>
    <div class="mb-3">
      <label for="validationTextarea" class="form-label">Краткое описание новости</label>
      <textarea name="description_low" class="form-control " id="validationTextarea" placeholder="Краткое описание новости" required></textarea>
      <div class="invalid-feedback">
        Please enter a text.
      </div>
    </div>
    <div class="mb-3">
      <label for="validationTextarea" class="form-label">Описание новости</label>
      <textarea name="description" class="form-control " id="validationTextarea" placeholder="Описание новости" required></textarea>
      <div class="invalid-feedback">
        Please enter a text.
      </div>
    </div>
    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Add post</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
  </form>