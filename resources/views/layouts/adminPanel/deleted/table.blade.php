<p class="h1">{{$title}}</p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Заголовок</th>
      <th scope="col">Содержимое</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <td>{{__($item['name'])}}</td>
      @if (array_key_exists('description', $item))
      <td>{{__($item['description'])}}</td>
      @endif
      <td>
        <form action="/{{$route}}/{{$item['id']}}/{{$titlePage}}" method="POST">
          @csrf
          @method('delete')
          <button class="text-danger" style="border:none; cursor:pointer" type="submit">Удал.</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>