@extends('main')

@section('content')

<div >
    <div class="container">

        <h1>Novi Festival</h1>
        <hr>
<div class="col-md-8 offset-md-2">
        <form  method="POST" action="{{ route('Admin.store') }}" enctype="multipart/form-data">
            <div class="form-row">
                {{ csrf_field() }}

                <div class="form-group col-md-12">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                </div>



                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload image</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="featured_image" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>


            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state"  name="state" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city"  name="city" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address"  name="address" placeholder="">
                </div>
            </div>

            <div class="form-row">
                <label for="start_event" class="col-2 col-form-label">Start:</label>
                <div class="col-md-6">
                    <input class="form-control" type="datetime-local" value="2018-01-01T13:00:00" id="start_event" name="start_event">
                </div>
            </div>

            <div class="form-row">
                <label for="end_event" class="col-2 col-form-label">End:</label>
                <div class="col-md-6">
                    <input class="form-control" type="datetime-local" value="2018-01-02T00:00:00" id="end_event" name="end_event">
                </div>
            </div>



            {{--<div class="form-row">--}}
                {{--<label for="featured_image">Select image to upload:</label>--}}
                {{--<input type="file" name="featured_image" id="featured_image">--}}
            {{--</div>--}}

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
</div>
@endsection