
<form action="users" method="POST">
    @csrf
   <input type="text" name = "username">
   <br>
   <span style="color:red;font-weight:bold">@error('username'){{$message}}@enderror</span>
   <br>
   <input type="password" name = "password">
   <br>
   <span style="color:red;font-weight:bold">@error('password'){{$message}}@enderror</span>
   <br>
    <button type="submit">login</button>
</form>