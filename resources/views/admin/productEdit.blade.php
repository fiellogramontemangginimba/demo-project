@extends('templates.dashboard')
@section('content')

<div class="card">
            <div class="card-body">
                
                <form action="{{url('/admin/'.$product->id)}}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
                    <label>Lead</label></br>
                    <input type="text" name="lead" id="name" value="{{$product->lead}}" class="form-control"></br>
                    <label>Heading</label></br>
                    <input type="text" name="heading" id="name" value="{{$product->heading}}" class="form-control"></br>
                    <label>Image</label></br>
                    <input type="text" name="coffee_image" id="image" value="{{$product->album_image}}" class="form-control"></br>
                    <label>Description</label></br>
                    <input type="text" name="desc" id="paragraph" value="{{$product->desc}}" class="form-control"></br>
                    <input type="submit" value="Update" class="btn btn-success"></br>
                </form>  
            
            </div>
        </div>

@endsection 