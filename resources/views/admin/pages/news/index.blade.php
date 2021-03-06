@extends('admin.master')
@section('title','Admin | All News')

@section('content')
	<form> 
		
		<input style="float:right;width:400px;" name="search" type="text" placeholder="Search here">
		 <input type="submit" name="submit" class="btn btn-sm btn-success">

	</form>
	 <h3>All News</h3>
	  <table class="table table-dark">
	    <thead>
	      <tr>
	        <th>SI</th>
	        <th>Title</th>
	        <th>Category</th>
	        <th>Tag</th>
	        <th>Description</th>
	        <th>Image</th>
	        <th>ACTION</th>
	      </tr>
	    </thead>
	    <tbody>
	       @foreach ($news as $ne)
	       	   <tr>
		        <td>{{$loop->index+1}}</td>
		        <td>{{$ne->title}}</td>
		        <td>
		        	<ul>
		        		@foreach ($ne->categories as $category)
		        		  <li>{{$category->name}}</li>			
		        		@endforeach
		        	</ul>
		        </td>
		        <td>
		        	<ul>
		        		@foreach ($ne->tags as $tag)
		        		  <li>{{$tag->name}}</li>			
		        		@endforeach
		        	</ul>
		        </td>
		        <td>{!! substr(nl2br($ne->description),0,100) !!}</td>
				<td> <img src="{{ asset('images/thumbnail/') }}/{{$ne->image}}" width="50" height="50"> </td>
				<td> <a href="{{ route('admin.news.edit',$ne->id) }}"><span 		class="glyphicon glyphicon-edit"></span></a>

					<form id="delete-form-{{ $ne->id }}" method="post" action="{{ route('admin.news.destroy',$ne->id) }}" style="display: none">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
						</form>

					<a href="" onclick="
					if(confirm('Are you sure, You Want to delete this?'))
					{
					event.preventDefault();
					document.getElementById('delete-form-{{ $ne->id }}').submit();
					}
					else{
					event.preventDefault();
					}" ><span class="glyphicon glyphicon-trash"></span></a>
					
				
				</td>
		      </tr>
	       @endforeach
		 
	      
	    </tbody>
	  </table>
	  
	  <div style="padding-left:500px;">
		  {{ $news->links() }}
	  </div>
	
@endsection