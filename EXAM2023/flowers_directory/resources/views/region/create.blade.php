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
  <h1 class="text-center bg-danger pt-3 pb-3" >Create region</h1>
    <div class="row">
        <form action="{{ route('region.store')  }}"  method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">flower_id:</label>
              <input type="text"  name="flower_id" class="form-control" required>
              
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">region_name:</label>
                <input type="text"  name="region_name" class="form-control" required>
                
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href={{route('region.index')}} class="btn  btn-primary">Back</a>
          </form>
    </div>
</div>
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

</body>
</html>
    