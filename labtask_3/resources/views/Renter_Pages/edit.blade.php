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

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update Car Info</p>

  <form action="{{route('editNewCar-Renter')}}" method="post"  class="" enctype="multipart/form-data">
    
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif

                  {{@csrf_field()}}

  <input type="text" name="id" hidden value="{{$car_services->id }}">
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Car name</label>  
      <input type="text" name="car_name" id="form6Example1" required value="{{ $car_services-> car_name }}" class="form-control" />
        
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Car model</label>  
      <input type="text" name="car_model" id="form6Example2" required value="{{ $car_services-> car_model }}" class="form-control" />
        
        
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example2">Car Type : </label>
  <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="car_type" required value="{{ $car_services-> car_type =='Family' }}" checked>
                        <label class="form-check-label">Family</label>
                      </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="car_type" required value="{{ $car_services-> car_type =='Non-Family' }}" checked>
                    <label class="form-check-label">Non-family</label>
                  </div><br>
                    
  </div>
  

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Car Number</label>
      <input type="text" id="form6Example2" name="car_number" required value="{{ $car_services-> car_number }}" class="form-control" />
        
        
      </div>

    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Rent Price</label>
      <input type="number" id="form6Example1" name="rent_price" required value="{{ $car_services-> rent_price }}" class="form-control" />
        
      </div>
      
    </div>
  </div>

  <div class="form-outline mb-4">
  <label class="form-label" for="form3Example1c">Date of Buying</label>
<input type="date" name="car_buy_date" required value="{{ $car_services-> car_buy_date }}"  class="form-control" >

  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        
  <label class="form-label" for="form6Example1">Choose Car color</label>
  <select class="form-select" name="car_color" value="{{ $car_services-> car_color }}" >
  <option value="">Select Color</option>
  <option value="{{ $car_services-> car_color =='White' }}" selected >White</option>
  <option value="{{ $car_services-> car_color =='Black' }}" selected >Black</option>
  <option value="{{ $car_services-> car_color =='Blue' }}"  selected >Blue</option>
  </select>
      </div>
     
    </div>
    <div class="col">
      <div class="form-outline">
        
  <label class="form-label" for="form6Example2">Choose Car Sit number</label>
  <select class="form-select"  name="sit_number" value="{{ $car_services-> car_color }}">
  <option value="" >Select Number</option>
  <option value="{{ $car_services-> car_color =='2' }}" selected >2</option>
  <option value="{{ $car_services-> car_color =='4' }}" selected >4</option>
  <option value="{{ $car_services-> car_color =='8' }}" selected >8</option>
  </select>
      </div>
      
    </div>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" name="car_details" value="{{ $car_services-> car_details }}"  rows="4"></textarea>
    <label class="form-label" >Car details</label>
    
  </div>

  <div class="form-outline mb-4">
  <label class="form-check form-check-inline" for="form3Example1c">Select Car Pic</label>
    <input type="file" name="car_pic" value="">
   
  </div>

  
                    

 

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Upload</button>
  
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