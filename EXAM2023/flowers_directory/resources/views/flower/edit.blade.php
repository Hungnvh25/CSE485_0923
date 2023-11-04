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
    <h1 class="text-center bg-danger pt-3 pb-3" >Edit flower</h1>
    <div class="row">
        <form  action="{{ route('flower.update',	$flower->id)  }}"  method="POST"> 
            @csrf
            @method('PUT')
            
            <div  class="form-group">
                <label  for="name">Name:</label>
                <input	type="text"	name="name"	class="form-control"	value="{{ $flower->name  }}"  required>
            </div>
            <div  class="form-group">
                <label  for="name">description:</label>
                <input	type="text"	name="description"	class="form-control"	value="{{ $flower->description  }}"  required>
            </div>
            <div  class="form-group">
                <label  for="name">image_url:</label>
                <input	type="text"	name="image_url"	class="form-control"	value="{{ $flower->image_url}}"  required>
            </div>
            
            
                <div  class="form-group mt-2">
                <button  type="submit"  class="btn  btn-primary">Update</button>
                <a href={{route('flower.index')}} class="btn  btn-primary">Back</a>
            </div>
        </form>
            
    </div>
</div>
    
   

</body>
</html>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    