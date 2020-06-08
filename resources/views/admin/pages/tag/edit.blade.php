@extends('admin.master')
@section('title','ADMIN | Update Tag')

@section('content')
	<div class="container">

		<div class="row">
			
        <div class="col-md-3 col-sm-3">
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Tag
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form action="{{ route('admin.tag.update',$tags->id)}}" method="post">
                                @method('PUT')
                                {{csrf_field()}}
                                <label for="tag">tag Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="tag" class="form-control" 
                                        value="{{$tags->name}}"
                                         placeholder="Enter tag">
                                    </div>
                                </div>
                                
                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-4">
         	 
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                List of tag
                                
                            </h2>
                           
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tag NAME</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Tag NAME</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </tfoot>
                                <tbody>
                                  @foreach ($alltags as $tag)
                                      
                                    <tr>
                                        <th scope="row">{{$tag->index+1}}</th>
                                        <td>{{$tag->name}}</td>
                                        <td> <a href="{{ route('admin.tag.edit',$tag->id)}}"> <span class="glyphicon glyphicon-edit"></a>/

                                        <form id="delete-form-{{ $tag->id }}" method="post" action="{{ route('admin.tag.destroy',$tag->id) }}" style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="
                                            if(confirm('Are you sure, You Want to delete this?'))
                                            {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $tag->id }}').submit();
                                            }
                                            else{
                                            event.preventDefault();
                                            }" ><span class="glyphicon glyphicon-trash"></span></a></td>
                                        
                                    </tr>
                                  @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		
	</div>
  
@endsection