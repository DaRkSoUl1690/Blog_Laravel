<h1>Update Member</h1>

<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$users['id']}}>

    <input type="text" name="username" value="{{$users['name']}}">
    <br>
    <br>
    <input type="text" name="email" value="{{$users['email']}}">
    <br>
    <br>
    <input type="text" name="address" value="{{$users['address']}}">
    <br>
    <br>
    <button type="submit">update</button>
</form>
