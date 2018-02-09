

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

<div >
    <div class="col-md-10 col-md-offset-1">

        <h1>Novi Festival</h1>
        <hr>

        <form  method="POST" action="{{ route('Admin.store') }}" enctype="multipart/form-data">
            <div class="form-row">
                {{ csrf_field() }}

                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                </div>

                <div class="form-group col-md-6">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state"  name="state" placeholder="">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city"  name="city" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address"  name="address" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <label for="start_event" class="col-2 col-form-label">Start date and time</label>
                <div class="col-10">
                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="start_event" name="start_event">
                </div>

                <label for="end_event" class="col-2 col-form-label">end date and time</label>
                <div class="col-10">
                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="end_event" name="end_event">
                </div>
            </div>

            <div class="form-row">
                <label for="featured_image">Select image to upload:</label>
                <input type="file" name="featured_image" id="featured_image">
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                        <label for="info">Info</label>
                        <textarea class="form-control" id="info"  name="info" rows="3"></textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Sacuvaj</button>
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