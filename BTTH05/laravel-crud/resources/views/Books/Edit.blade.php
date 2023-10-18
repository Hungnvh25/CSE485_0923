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
    <div class="row">
        <form action="{{ route('books.update', $book->id) }}"  method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Author_id:</label>
              <input type="text"  name="author_id" class="form-control" value="{{$book->author_id}}" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Title:</label>
              <input   name="title"  class="form-control" value="{{$book->title}}" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

</body>
</html>
    