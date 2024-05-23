<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Functionality</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><h3>Search</h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" action="{{ route('index') }}" method="GET">
              <input name="query" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Search Results for "{{$query}}"</h1>

                
            </div>
        </div>
    </div>
      <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>All Posts List Here</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-dark">
                            <thead>
                              <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Post Title</th>
                                <th scope="col">Users</th>
                                <th scope="col">Discription</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if($results->isEmpty())
                                    <tr>
                                        No results found.
                                    </tr>
                                @else 
                              @foreach ($results as $result)
                                  <tr>
                                    <td>{{$result->id}}</td>
                                    <td>{{$result->title}}</td>
                                    <td>{{$result->user}}</td>
                                    <td>{{$result->dis}}</td>
                                  </tr>
                              @endforeach
                              
                              @endif
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Posts</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('postadd')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail11">User Name</label>
                                <input type="text" name="user" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail11">Post Discription</label>
                                <input type="text" name="dis" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success w-100">Add Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>