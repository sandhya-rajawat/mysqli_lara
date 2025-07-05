<div>
  <h1>hello user</h1>
  <!-- {{print_r($userinfo)}} -->
  <table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>password</td>
        <td>age</td>
    </tr>
 
  @foreach($userinfo as $users)
  <tr>
    <td>{{$users->id}}</td>
    <td>{{$users->name}}</td>
    <td>{{$users->email}}</td>
    <td>{{$users->password}}</td>
    <td>{{$users->age}}</td>
  </tr>
  @endforeach
   </table>
</div>
