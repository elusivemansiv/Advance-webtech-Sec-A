@include('layouts.navbar')

<form action="{{route('registrationsubmit')}}" method="post" align="center">
{{@csrf_field()}}
 <h3>Registration</h3>   
<input type="text" name="uname" value="{{old('uname')}}" placeholder="Enter username">
<br>
@error('uname')
<span>{{$message}}</span>
@enderror
<br><br>
<input type="text" name="password"  placeholder="Enter Password">
<br>
@error('password')
<span>{{$message}}</span>
@enderror
<br><br>
<input type="text" name="number" value="{{old('number')}}" placeholder="Enter Phone Number">
<br>
@error('number')
<span>{{$message}}</span>
@enderror
<br><br>
<input type="date" name="dob" value="{{old('dob')}}" placeholder="DOB">
<br>
@error('dob')
<span>{{$message}}</span>
@enderror
<br><br>
<input type="submit">

</form>