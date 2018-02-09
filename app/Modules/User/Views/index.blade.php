@extends('main')
<!--rest of body-->
@section('content')
<div class="row">
    @foreach ($fests as $fest)

        <div class="col-md-6 card card-inverse">
            <img class="card-img" src="image/{{$fest->image}}" alt="Card image" style="opacity: 0.7;">
            <div class="card-img-overlay">
                <h4 class="card-title">{{$fest->name}}</h4>
                <p class="card-text"><small>{{$fest->state}},{{$fest->city}},{{$fest->address}}</small></p>
                <p class="card-text"><small >Od {{date('j M Y  G:i', strtotime($fest->start_event))}} do {{date('j M Y  G:i', strtotime($fest->end_event))}}</small></p>

                <a href="{{ route('User.show', $fest->id) }}" class="btn btn-primary">Detaljnije</a>
            </div>
        </div>
    @endforeach

</div>

<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            {!! $fests->links() !!}
        </div>
    </div>
</div>

@endsection