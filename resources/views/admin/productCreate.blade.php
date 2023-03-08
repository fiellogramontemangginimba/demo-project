@extends('templates.dashboard')

@section('content')

<div class="card">
            <div class="card-body">
                
                <form action="{{url('/admin')}}" method="post">
                    {!! csrf_field() !!}
                    <label>Lead</label></br>
                    <input type="text" name="lead" id="text" class="form-control"></br>
                    <label>Heading</label></br>
                    <input type="text" name="heading" id="text" class="form-control"></br>
                    <label>Image</label></br>
                    <input type="text" name="album_image" id="text" class="form-control"></br>
                    <label>Description</label></br>
                    <input type="paragraph" name="desc" id="text" class="form-control"></br>
                    <input type="submit" value="Save" class="btn btn-success"></br>
                </form>
            
            </div>
        </div> 

@endsection