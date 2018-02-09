@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-7 offset-md-1">
            <div class="jumbotron">
            <h1 class="display-3">{{$fest->name}}</h1>



            @if(!empty($fest->image))
                <img src="{{ asset('image/'.$fest->image) }}" height="250px" width="auto"/>
            @endif

            <p class="lead">{{$fest->info}}</p>
            <p class="lead"> Pocetak: {{$fest->start_event}}</p>
            <p class="lead">Kraj: {{$fest->end_event}}</p>
            <p class="lead">Adresa: {{$fest->address}}</p>
            <p class="lead">Grad: {{$fest->city}}
            <p class="lead">Drzava: {{$fest->state}}</p>
            </div>

        </div>


        <div class="col-md-3">
            <h2>Prisustvuju<span class="badge">{{ $fest->visitors->count() }}</span></h2>

            <p >
                <a class="btn btn-info btn-lg" href="{{route('Admin.list',$fest->id)}}" role="button">lista posetilaca</a>

                <a class="btn btn-info btn-lg" href="{{route('Admin.edit',$fest->id)}}" role="button">Edit</a>

                {!! Form::open(['route'=>['Admin.destroy',$fest->id],'method'=>'DELETE']) !!}

                {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-lg']) !!}

                {!! Form::close() !!}

            </p>
        </div>
    </div>












{{--<div class="row">--}}
    {{--<div class="jumbotron">--}}
            {{--<h1 class="display-3">{{$fest->name}}</h1>--}}
            {{--<h2>Prisustvuju<span class="badge">{{ $fest->visitors->count() }}</span></h2>--}}
        {{--<a class="btn btn-info btn-lg" href="{{route('Admin.list',$fest->id)}}" role="button">lista posetilaca</a>--}}

            {{--@if(!empty($fest->image))--}}
                {{--<img src="{{ asset('image/'.$fest->image) }}" height="160px" width="auto"/>--}}
            {{--@endif--}}

            {{--<p class="lead">{{$fest->info}}</p>--}}
        {{--<p class="lead"> Pocetak: {{$fest->start_event}}</p>--}}
        {{--<p class="lead">Kraj: {{$fest->end_event}}</p>--}}
        {{--<p class="lead">Adresa: {{$fest->address}}</p>--}}
        {{--<p class="lead">Grad: {{$fest->city}}--}}
        {{--<p class="lead">Drzava: {{$fest->state}}</p>--}}
            {{--<hr class="my-4">--}}
            {{--<p>{{$fest->updated_at}}</p>--}}
            {{--<p class="lead">--}}
                {{--<a class="btn btn-info btn-lg" href="{{route('Admin.edit',$fest->id)}}" role="button">Edit</a>--}}

                {{--{!! Form::open(['route'=>['Admin.destroy',$fest->id],'method'=>'DELETE']) !!}--}}

                {{--{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-lg']) !!}--}}

                {{--{!! Form::close() !!}--}}

            {{--</p>--}}

    {{--</div>--}}
{{--</div>--}}
@endsection