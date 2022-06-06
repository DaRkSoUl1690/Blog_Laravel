<form action="users" method="POST">
    @csrf
   <input type="text" name = "username">
   <br><br>
   <input type="password" name = "password">
   <br><br>
    <button type="submit">login</button>
</form>