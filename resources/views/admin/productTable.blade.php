@extends('templates.dashboard')
@section('content')

<div class="row">
 
 <div class="w-100">
     <div class="card">
         <div class="card-header">Product Table</div>
         <div class="card-body">
             <a href="{{url('/admin/create')}}" class="btn btn-success btn-sm" title="Add New">
                 <i class="fa fa-plus" aria-hidden="true"></i> Add New
             </a>
             <br/>
             <br/>
             <div class="table-responsive">
                 <table class="table">
                     <thead>
                         <tr>
                             <th>Product Id</th>
                             <th>Lead</th>
                             <th>Heading</th>
                             <th>Image</th>
                             <th>Desc</th>
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                        @foreach  ($product as $list)
                        
                         <tr>
                             <td>{{ $list->id}}</td>
                             <td>{{ $list->lead}}</td>
                             <td>{{ $list->heading}}</td>
                             <td>{{ $list->album_image}}</td>
                             <td>{{ $list->desc}} </td> 

                             <td>
                                 <a href="{{url('/admin/'.$list->id. '/edit')}}" title="Edit Student"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</button></a>

                                 <form method="POST" action="{{url('/admin/'.$list->id)}}"accept-charset="UTF-8" style="display:inline">
                                     {{ method_field('DELETE') }}
                                     {{ csrf_field() }}
                                     <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                 </form>
                             </td>
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>

         </div>
     </div>
 </div>
</div>
@endsection 
