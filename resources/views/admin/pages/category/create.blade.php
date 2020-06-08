@extends('admin.master')
@section('title','ADMIN | ADD Category')

@section('content')
	<div class="container">

		<div class="row">
			
        <div class="col-md-3 col-sm-3">
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Category
                            </h2> 
                        </div>
                        <div class="body">
                            <form action="{{ route('admin.category.store') }}" method="post" >
                                {{csrf_field()}}
                                <label for="category">Category Name(Bangla)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="category" id="category" class="form-control" placeholder="Enter category">
                                    </div>
                                </div>
                                <label for="category">Category Name(English)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter slug">
                                    </div>
                                </div>
                                <br>
                                <input type="submit" id="add" class="btn btn-primary m-t-15 waves-effect">
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
                                List of Category
                                
                            </h2>
                           
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category NAME</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Category NAME</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </tfoot>
                                <tbody>
                                  @foreach ($categories as $category)
                                      
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$category->name}}</td>
                                        <td> <a href="{{ route('admin.category.edit',$category->id)}}"><span class="glyphicon glyphicon-edit"></a> /

                                        <form id="delete-form-{{ $category->id }}" method="post" action="{{ route('admin.category.destroy',$category->id) }}" style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="
                                            if(confirm('Are you sure, You Want to delete this?'))
                                            {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $category->id }}').submit();
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

@push('stack') 
   
@endpush