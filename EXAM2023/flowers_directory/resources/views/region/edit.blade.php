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
    <h1 class="text-center bg-danger pt-3 pb-3" >Edit region</h1>
    <div class="row">
        <form  action="{{ route('region.update',	$region->id)  }}"  method="POST"> 
            @csrf
            @method('PUT')
            
            <div  class="form-group">
                <label  for="name">flower_id:</label>
                <input	type="text"	name="flower_id"	class="form-control"	value="{{ $region->flower_id  }}"  required>
            </div>
            <div  class="form-group">
                <label  for="name">region_name:</label>
                <input	type="text"	name="region_name"	class="form-control"	value="{{ $region->region_name  }}"  required>
            </div>
                
            <div  class="form-group mt-2">
                <button  type="submit"  class="btn  btn-primary">Update</button>
                <a href={{route('region.index')}} class="btn  btn-primary">Back</a>
            </div>

        </form>
            
    </div>
</div>
    
   

</body>
</html>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    