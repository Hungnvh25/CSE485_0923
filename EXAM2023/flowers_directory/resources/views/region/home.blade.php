<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/icons/font/bootstrap-icons.min.css') }}">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid  ">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href={{route('flower.index')}}>flower</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('region.index')}}>region</a>   
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

    <h1 class="text-center bg-danger pt-3 pb-3 ">List region</h1>

    @if (session('success'))
    <div class="alert alert-success"  >
      {{ session('success') }}
    </div>
    @endif

    <a  href="{{route('region.create')}}"  class="btn  btn-success">Add  New region</a>
    <table class="table">
        <thead>
          <tr >
            <th scope="col">ID</th>
            <th scope="col">flower_id</th>
            <th scope="col">region_name</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            
          </tr> 
        </thead>
        <tbody>
            @foreach ($region as $item)
            <tr>
              <th  scope="row">{{$item->id}}</th>



                <td>{{$item->flower_id}}</td>
      

                <td>{{$item->region_name}}</td>

                <td>{{$item->created_at}}</td>

                <td>{{$item->updated_at}}</td>
                <td><a href="region.edit', $item->id)}}"><i class="bi bi-eye"></i></a></td>
                <td><a href="{{route('region.edit', $item->id)}}"><i class='bi bi-pen'></a></td>
                <td><a data-bs-toggle="modal" data-bs-target="#id{{$item->id}}" ><i class='bi bi-trash3' ></a></td>
            </tr>

          
            <div class="modal fade" id="id{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete region</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Are you sure delete region have id: {{$item->id}}  ?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{route('region.destroy', $item->id)}}" method="POST" >

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary"  href="">Delete</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
            

        </tbody>
      </table>
    <div class="d-flex justify-content-center mt-3">
        {{ $region->links('pagination::bootstrap-4')}}
    </div>

    
</body>

</html>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

