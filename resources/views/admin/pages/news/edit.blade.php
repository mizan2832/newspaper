@extends('admin.master')
@section('title','ADMIN | ADD NEWS')

@section('content')
<div class="container">

    @if(count( $errors ) > 0)
    @foreach ($errors->all() as $error)
    <div> <span class="btn-danger">{{ $error }}</span> </div>
    @endforeach
    @endif

    <div class="row">

        <form action="{{ route('admin.news.update',$singlenews->id) }}" enctype="multipart/form-data" method="POST"
            id="validate_form">
            {{csrf_field()}}
            @method('PUT')
            <div class="col-md-4 col-sm-3">
                <div class="form-group">
                    <div class="form-line">
                        <label for="title"> News Title:</label>
                        <input type="text" name="title" value="{{ $singlenews->title }}" id="title" class="form-control"
                            placeholder="Enter Title" />
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-3">

                <div class="form-group">
                    <div class="form-line">
                        <label for="file"> Photo:</label>

                        <input type="file" name="image" id="image" id="image" />
                        <img src="{{ asset('images/thumbnail/',$singlenews->image) }}" alt="news image">
                    </div>
                </div>
            </div>

    </div>
    <div class="row">
        <div class="col-md-4 col-sm-3">
            <label for="sel1">Select Category:</label>
            <select class="form-control" id="categorytoption" id="category" name="category[]" multiple>
                @foreach($categories as $cat)
                
                <option value="{{$cat->id}}">{{$cat->name}}</option>



                @endforeach

            </select>
        </div>
        <div class="col-md-4 col-sm-3">
            <label for="sel1">Select Tag:</label>
            <select class="form-control" id="tagoption" id="tag" name="tag[]" multiple>
                @foreach($tags as $tag)
               
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach

            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            <div class="form-group">
                <label for="comment">News Body:</label>
                <textarea class="form-control" name="description" id="description" rows="5"
                    id="description">{!! nl2br($singlenews->description) !!}</textarea>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <button type="submit" class="btn btn-success" id="btn_submit">Submit</button>
</div>
</form>



@endsection

@push('script')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    $('textarea').ckeditor();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

<script type="text/javascript">
    $('#categorytoption').select2({
                  placeholder: 'Select Category '
                });
             $('#tagoption').select2({
                  placeholder: 'Select Tag'
                });
</script>


<script src="http://parsleyjs.org/dist/parsley.js"></script>

<script>
    $(document).ready(function() {
          $('#validate_form').parsley();
      });
</script>

@endpush