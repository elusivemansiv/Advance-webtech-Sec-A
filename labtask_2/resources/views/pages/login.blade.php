@include('layouts.navbar')

<form action= "{{route('loginsubmit')}}" method="post" align="center">
 {{@csrf_field()}} 
<h3>Login</h3>   
<input type="text" name="uname" value="{{old('uname')}}" placeholder="Enter username">
<br>
@error('uname')
<span>{{$message}}</span>
@enderror
<br>
<br>
<input type="text" name="password" placeholder="Enter Password">
<br>
@error('password')
<span>{{$message}}</span>
@enderror
<br>
<br>
 
<input type="submit">

</form>