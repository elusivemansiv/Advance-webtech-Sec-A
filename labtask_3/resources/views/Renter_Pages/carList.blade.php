<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRMS- Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">

    <a class="nav-link" href="dashboard_renter">Back</a>

      <div class="col-md-6 col-lg-12 col-xl-20">

      <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Image</th>
      <th>Car Name</th>
      <th>Car Model</th>
      <th>Car Type</th>
      <th>Sits</th>
      <th>Color</th>
      <th>Rent Price</th>
      <th>Car Number</th>
      <th>Details</th>
      <th>Actions</th>
    </tr>
  </thead>
  
  @foreach ($car_services as $car_service )
  
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          
        </div>
      </td>
      <td>
      <span class="">{{ $car_service->car_name }}</span>
        
      </td>
      <td>
        <span class="">{{ $car_service->car_model }}</span>
      </td>
      <td>
      <span class="">{{ $car_service->car_type }} </span>
      </td>
      <td>
      <span class="">{{ $car_service->sit_number }}</span>
      </td>
      <td>
      <span class=""> {{ $car_service->car_color }} </span>
      </td>
      <td>
      <span class=""> {{ $car_service->rent_price }} </span>
      </td>
      <td>
      <span class=""> {{ $car_service->car_number }} </span>
      </td>
      <td>
      <span class=""> {{ $car_service->car_details }} </span>
      </td>
      <td>
        <a href="{{route('edit', $car_service->id)}}" class="btn btn-warning">Edit</a>
        <div>
        <br>
        </div>
        <form action="{{route('delete')}}" method="POST">
          @method('DELETE')
          @csrf
          <input type="text" name="id" value="{{$car_service->id }}" hidden>
        <button class="btn btn-danger">Delete</button>
        </form>
      </td>
      @endforeach
  </tbody>
</table>
      </div>

    </div>

  </div>
</section>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        
    </script>
</html>