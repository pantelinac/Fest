

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

<!--rest of body-->

<div class="row">
    <div class="col-md-12">

        <h1>Izmena Festivala</h1>
        <hr>

        {!! Form::model($fest, ['route' => ['Admin.update', $fest->id], 'method'=>'PUT', 'files'=>true]) !!}
        <div class="col-md-8">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('state', 'State:') }}
            {{ Form::text('state', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('city', 'City:') }}
            {{ Form::text('city', null, ["class" => 'form-control input-lg']) }}


            {{ Form::label('address', 'Address:') }}
            {{ Form::text('address', null, ["class" => 'form-control input-lg']) }}


            {{ Form::label('featured_image','Update Featured Image:',["class"=>'form-spacing-top']) }}
            {{ Form::file('featured_image') }}
            <br>

            {{ Form::label('start_event', 'Start_event:') }}
            {{ Form::date('start_event', \Carbon\Carbon::now(), ["class" => 'form-control input-lg']) }}

            {{ Form::label('end_event', 'Start_event:') }}
            {{ Form::date('end_event', \Carbon\Carbon::now(), ["class" => 'form-control input-lg']) }}


            {{ Form::label('info', "Info:", ["class" => 'form-spacing-top']) }}
            {{ Form::textarea('info', null, ['class' => 'form-control']) }}




        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{date('j M Y  G:i', strtotime($fest->created_at))}}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{date('j M Y  G:i', strtotime($fest->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('Admin.show', 'Cancel',
                        array($fest->id),
                        array('class'=>'btn btn-danger btn-block'))!!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close()!!}



    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>