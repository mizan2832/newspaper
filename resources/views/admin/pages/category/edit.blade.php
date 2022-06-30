@extends('admin.master')
@section('title','ADMIN | Update Category')

@section('content')
	<div class="container">

		<div class="row">
			
        <div class="col-md-3 col-sm-3">
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Category
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form action="{{ route('admin.category.update',$categories->id)}}" method="post">
                                @method('PUT')
                                {{csrf_field()}}
                                <label for="category">Category Name(Bangla)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="category" class="form-control" 
                                        value="{{$categories->name}}"
                                         placeholder="Enter category">
                                    </div>
                                </div>
                                <label for="category">Category Name(English)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="slug" class="form-control" 
                                        value="{{$categories->slug}}"
                                         placeholder="Enter slug">
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
                                  @foreach ($allcategories as $category)
                                      
                                    <tr>
                                        <th scope="row">{{$category->index+1}}</th>
                                        <td>{{$category->name}}</td>
                                        <td> <a href="{{ route('admin.category.edit',$category->id)}}"></a> <span class="glyphicon glyphicon-edit">/<span class="glyphicon glyphicon-trash"></span></td>
                                        
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