<table class="table">
  <thead>
    <tr>
      <th scope="col">no </th>
      <th scope="col">nama </th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dataUser as $index =>$user )
    <tr>
      <td>{{ ++$index }}</td>
      <td>{{ $user->name}}</td>
      <td>{{ $user->email}}</td>
      <td>{{ $user->password}}</td>
    </tr>
   @endforeach
  </tbody>
</table>