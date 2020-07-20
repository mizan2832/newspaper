@extends('front.index')
@push('styles')
    <style>
            a:link {
            color: black;
            }

            /* visited link */
            a:visited {
            color: red;
            }

            /* mouse over link */
            a:hover {
            color: red;
            }
    </style>
@endpush
@section('content')
    
    <div class="container ">
        <h3><-- Search Result --></h3>
        <div class="row col-md-12">
            <div style="border:1px solid black; padding:10px">
                @foreach ($searchnews as $search)
                 @php
                     $id = $search->category_id;
                     $category_name = App\admin\Category::find($id)->first();
                 @endphp
                  <h4><a  href="/details/{!! strtolower($category_name->name)!!}/{{ strtolower(str_replace(' ','_',$search->title)) }}/{{ $search->id }}">{{ $search->title }}</a></h4>
                  <p><a href="http://">{!! substr(nl2br($search->description),0,100) !!}</a></p>
                @endforeach           
            </div>
        </div>
    </div>
@endsection