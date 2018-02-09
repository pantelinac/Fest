@extends('main')

@section('content')


    <div class="row">
    <div class="col-md-12">

        <h1>Izmena Festivala</h1>
        <hr>
<div class="row">
    <div class="col-md-10 offset-md-2">
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


            {{ Form::label('featured_image','Update Featured Image:') }}
            {{ Form::file('featured_image') }}
            <br>

            {{ Form::label('start_event', 'Start_event:') }}
            {{ Form::date('start_event', \Carbon\Carbon::now(), ["class" => 'form-control input-lg']) }}

            {{ Form::label('end_event', 'Start_event:') }}
            {{ Form::date('end_event', \Carbon\Carbon::now(), ["class" => 'form-control input-lg']) }}


            {{ Form::label('info', "Info:") }}
            {{ Form::textarea('info', null, ['class' => 'form-control']) }}

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

    </div>
</div>
@endsection