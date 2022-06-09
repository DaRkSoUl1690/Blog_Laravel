<!-- <x-header componentName = "Users"/> -->
<h1>  Hello World !!</h1>

<form action="users" method="GET">
{{-- 
 /**
to make the method take {{method_field['PUT']}} and change get to put in  web.php 
  similar with delete 
*/ --}}

    <input type="text" name = "username">
    <br>
    {{-- <span style="color:red;font-weight:bold">@error('username'){{$message}}@enderror</span> --}}
    <br>
    <input type="password" name = "password">
    <br>
    {{-- <span style="color:red;font-weight:bold">@error('password'){{$message}}@enderror</span> --}}
    <br>
     <button type="submit">login</button>

</form>










////////////////////////////////////////////////////////////////
{{-- @include('inner') --}}

{{-- @csrf --}}

{{-- @foreach ($users as $user)
    <h4>{{$user}}</h4>
@endforeach --}}

{{-- 
<script>
   var data = @json($users); 
   console.warn(data[0]);
</script> --}}