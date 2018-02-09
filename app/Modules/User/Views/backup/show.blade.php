

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<!--navbar-->
<ul class="nav nav-pills justify-content-end" style="background-color: #b3c0ca">
    <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
    </li>
</ul>

<!--rest of body-->


<div class="row">
    <div>
    <div class="jumbotron">
            <h1 class="display-3">{{$fest->name}}</h1>
            @if(!empty($fest->image))
                <img src="{{ asset('image/'.$fest->image) }}" height="160px" width="auto"/>
            @endif

            <p class="lead">{{$fest->info}}</p>
        <p class="lead"> Pocetak: {{date('j M Y  G:i', strtotime($fest->start_event))}}</p>
        <p class="lead">Kraj: {{date('j M Y  G:i', strtotime($fest->end_event))}}</p>
        <p class="lead">Adresa: {{$fest->address}}</p>
        <p class="lead">Grad: {{$fest->city}}
        <p class="lead">Drzava: {{$fest->state}}</p>
            <hr class="my-4">
            <p>{{$fest->updated_at}}</p>


    </div>

    <form  method="POST" action="{{ route('User.store') }}" enctype="multipart/form-data">

            {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="">
            </div>
        </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" class="form-control" id="lastname"  name="lastname" placeholder="">
                </div>
            </div>

        <div class="form-row">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email"  name="email" placeholder="">
            </div>

        </div>

        <input type="hidden" name="fest_id" value="{{$fest->id}}">
        <button type="submit" class="btn btn-primary">Rezervisi</button>
    </form>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>