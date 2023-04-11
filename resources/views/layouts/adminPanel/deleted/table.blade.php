<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Содержимое</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Новости</td>
      <td>
        <form action="">
          @csrf
          @method('delete')
          <button class="text-danger" style="border:none; cursor:pointer" type="submit">Удал.</button>
        </form>
      </td>
    </tr>
    <tr>
      <td>Категории</td>
      <td>
        <form action="">
          @csrf
          @method('delete')
          <button class="text-danger" style="border:none; cursor:pointer" type="submit">Удал.</button>
        </form>
      </td>
    </tr>
    <tr>
      <td>Заказы</td>
      <td>
        <form action="">
          @csrf
          @method('delete')
          <button class="text-danger" style="border:none; cursor:pointer" type="submit">Удал.</button>
        </form>
      </td>
    </tr>
    <tr>
      <td>Комментарии</td>
      <td>
        <form action="">
          @csrf
          @method('delete')
          <button class="text-danger" style="border:none; cursor:pointer" type="submit">Удал.</button>
        </form>
      </td>
    </tr>
  </tbody>
</table>