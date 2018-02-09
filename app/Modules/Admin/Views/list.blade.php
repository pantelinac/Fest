@extends('main')

@section('content')


<div class="row">
    <div class="col-md-8 offset-md-2" style="background-color: #a5a5a5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($vis as $visitor)
            <tr>
                <td>{{$visitor->firstname}}</td>
                <td>{{$visitor->lastname}}</td>
                <td>{{$visitor->email}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

{{--<div class="row">--}}
    {{--@foreach ($vis as $visitor)--}}

        {{--<div class="box">--}}
            {{--<h4>{{$visitor->id}},{{$visitor->firstname}}, {{$visitor->lastname}}, {{$visitor->email}} </h4>--}}

            {{--<br>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}

{{--</div>--}}

@endsection