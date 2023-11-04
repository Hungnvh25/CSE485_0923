<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/font/bootstrap-icons.min.css') }}">
</head>
<body>
<div class="container">
  <h1 class="text-center bg-danger pt-3 pb-3" >Show flower</h1>
      <div class="card mb-3" style="max-width: 1300px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ $flower->image_url}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Name : {{ $flower->name  }}</h5>
              <p class="card-text">Description: {{ $flower->description  }}</p>
             
            </div>
            <ul class="list-group list-group-flush">
              @if ($regions->count() > 0)
                  @foreach ($regions as $region)
                      <li class="list-group-item">Region: {{ $region->region_name }}</li>
                  @endforeach
              @else
                  <li class="list-group-item">No regions available</li>
              @endif
          </ul>
          
          <div class="card-body">
            <a href={{route('flower.edit', $flower->id)}} class="btn  btn-primary">Edit</a>
            <a href={{route('flower.index')}} class="btn  btn-primary">Back</a>
        </div>
          </div>
        </div>
      </div>



</div>
    
   

</body>
</html>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    