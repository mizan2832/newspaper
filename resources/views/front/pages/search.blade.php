@include('front.includes.header')
@include('front.pages.breaking')
@push('styles')
    <style>
           
    </style>
@endpush

    
    <div class="container ">
        <h3><-- Search Result --></h3>
        <div class="row col-md-12">
            <div style="border:1px solid black; padding:10px">
                @foreach ($searchnews as $search)
                 @php
                     $id = $search->category_id;
                     $category_name = App\admin\Category::find($id)->first();
                 @endphp
                  <h4><a class="searchlink"  href="/details/{!! strtolower($category_name->name)!!}/{{ strtolower(str_replace(' ','_',$search->title)) }}/{{ $search->id }}">{{ $search->title }}</a></h4>
                  <p><a href="http://">{!! substr(nl2br($search->description),0,250) !!}</a></p>
                @endforeach           
            </div>
        </div>
    </div>
