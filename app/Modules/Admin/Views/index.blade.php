@extends('main')

@section('content')

<!--rest of body-->

<div class="row">
    @foreach ($fests as $fest)

        <div class="col-md-6 card card-inverse">
            @if(!empty($fest->image))
                <img src="{{ asset('image/'.$fest->image) }}" height="250px" width="auto" style="opacity: 0.7"/>
            @endif
            <div class="card-img-overlay">
                <h4 class="card-title">{{$fest->name}}</h4>
                <p class="card-text">Od {{date('j M Y  G:i', strtotime($fest->start_event))}} do {{date('j M Y  G:i', strtotime($fest->end_event))}}</p>
                <p class="card-text">{{ str_limit(strip_tags($fest->info), 50) }}...</p>
                <a href="{{ route('Admin.show', $fest->id) }}" class="btn btn-primary">Detaljnije</a>
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