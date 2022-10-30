<?php
use Illuminate\Support\Facades\Request;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRMS-Add New Car</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Post New Car</p>

  <form action="{{route('addNewCar-Renter')}}" method="post"  class="" enctype="multipart/form-data">
    
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif

                  {{@csrf_field()}}


  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Car name</label>  
      <input type="text" name="car_name" id="form6Example1" value="{{old('car_name')}}" class="form-control" />
        
        <span class="text-danger">@error('car_name') {{$message}} @enderror</span>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Car model</label>  
      <input type="text" name="car_model" id="form6Example2" value="{{old('car_model')}}" class="form-control" />
        
        <span class="text-danger">@error('car_model') {{$message}} @enderror</span>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example2">Car Type : </label>
  <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="car_type" value="Family"@if(Request::old('car_type')=="Family") checked @endif >
                        <label class="form-check-label" >Family</label>
                      </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="car_type" value="Non-family"@if(Request::old('car_type')=="Non-family") checked @endif >
                    <label class="form-check-label" >Non-family</label>
                  </div><br>
                  <span class="text-danger">@error('car_type') {{$message}} @enderror</span>   
  </div>
  

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Car Number</label>
      <input type="text" id="form6Example2" name="car_number" value="{{old('car_number')}}" class="form-control" />
        
        
      </div>
      <span class="text-danger">@error('car_number') {{$message}} @enderror</span>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Rent Price</label>
      <input type="number" id="form6Example1" name="rent_price" value="{{old('rent_price')}}" class="form-control" />
        
      </div>
      <span class="text-danger">@error('rent_price') {{$message}} @enderror</span>
    </div>
  </div>

  <div class="form-outline mb-4">
  <label class="form-label" for="form3Example1c">Date of Buying</label>
<input type="date" name="car_buy_date" value="{{old('car_buy_date')}}" class="form-control" >
<span class="text-danger">@error('car_buy_date') {{$message}} @enderror</span>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        
        <label class="form-label" for="form6Example1">Choose Car color</label>
        <select class="form-select" name="car_color" value="car_color" >
  <option value="">Select Color</option>
  <option value="White"@if(Request::old('car_color')=="White") selected @endif>White</option>
  <option value="Black"@if(Request::old('car_color')=="Black") selected @endif>Black</option>
  <option value="Blue"@if(Request::old('car_color')=="Blue") selected @endif>Blue</option>
  </select>
      </div>
      <span class="text-danger">@error('car_color') {{$message}} @enderror</span>
    </div>
    <div class="col">
      <div class="form-outline">
        
        <label class="form-label" for="form6Example2">Choose Car Sit number</label>
        <select class="form-select" value="sit_number" name="sit_number" >
  <option value="" >Select Number</option>
  <option value="2"@if(Request::old('sit_number')=="2") selected @endif>2</option>
  <option value="4"@if(Request::old('sit_number')=="4") selected @endif>4</option>
  <option value="8"@if(Request::old('sit_number')=="8") selected @endif>8</option>
  </select>
      </div>
      <span class="text-danger">@error('sit_number') {{$message}} @enderror</span>
    </div>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" name="car_details" value="{{old('car_details')}}"  rows="4"></textarea>
    <label class="form-label" >Car details</label>
    <span class="text-danger">@error('car_details') {{$message}} @enderror</span>
  </div>

  <div class="form-outline mb-4">
  <label class="form-check form-check-inline" for="form3Example1c">Select Car Pic</label>
    <input type="file" name="car_pic"   value="{{old('car_pic')}}">
    <span class="text-danger">@error('car_pic') {{$message}} @enderror</span>
  </div>

  
                    

 

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Upload</button>
  <a class="nav-link" href="dashboard_renter">Back</a>
</form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
    
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        
    </script>
</html>