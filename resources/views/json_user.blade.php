<h1>User List</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Photo</td>
    </tr>
     @foreach ($collection as $item)
     <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src="{{$item['photo']}}" alt=""></td>
    </tr>
     @endforeach

</table>