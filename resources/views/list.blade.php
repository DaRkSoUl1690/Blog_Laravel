
<table border ='1'>
    <tr >
        <td>Id</td>
        <td>name</td>
        <td>email</td>
        <td>address</td>
    </tr>
   @foreach ($users as $user)
   <tr>
    <td>{{$user['id']}}</td>
    <td>{{$user['name']}}</td>
    <td>{{$user['email']}}</td>
    <td>{{$user['address']}}</td>
</tr>
   @endforeach
</table>
