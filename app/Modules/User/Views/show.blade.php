@extends('main')

@section('content')
<div class="row">

    <div class="col-md-7 offset-md-1">
        <div class="jumbotron">
            <h1 class="display-3">{{$fest->name}}</h1>
            <hr class="my-4">
            @if(!empty($fest->image))
                <img src="{{ asset('image/'.$fest->image) }}" height="160px" width="auto"/>
            @endif

            <p class="lead">Opis:{{$fest->info}}</p>
            <p class="lead"> Pocetak: {{date('j M Y  G:i', strtotime($fest->start_event))}}</p>
            <p class="lead">Kraj: {{date('j M Y  G:i', strtotime($fest->end_event))}}</p>
            <p class="lead">Adresa: {{$fest->address}}</p>
            <p class="lead">Grad: {{$fest->city}}
            <p class="lead">Drzava: {{$fest->state}}</p>



        </div>
    </div>
    <div class="col-md-3" >
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

@endsection