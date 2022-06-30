@foreach($comments as $comment)
<div class="comment-section">
    <img src="{{ asset('front/img/noimage.jpg') }}"  class="float-left rounded-circle" width="40" height="40" alt="">{{ $comment->user->name }} <br>


            <p>{{ $comment->body }}</p>
           
            <form method="post" action="{{ route('reply.add') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="comment_body" class="form-control" />
                    <input type="hidden" name="news_id" value="{{ $news_id }}" />
                    <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-warning" value="Reply" />
                </div>
            </form>
            @include('front.partials.comment_replies', ['comments' => $comment->replies])

</div>
@endforeach