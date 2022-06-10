<h1>add new Member</h1>
@if (session("username"))
<h3>Data saved for {{session('username')}}</h3>
@endif
<form action="storep" method="POST">
    @csrf
    <input type="text" name="username">
    <br>
    <br>
    <input type="password" name="password">
    <br>
    <br>
    <input type="text" name="abc">
    <br>
    <br>
    <button type="submit">login</button>
</form>
