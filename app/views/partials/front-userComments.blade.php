<!-- user comments -->
<div class="usercomments">
  <div class="title">
    {{ HTML::image('images/usercomments.gif') }}
  </div>
  <div class="cms">
    @foreach($comments as $comment)
      <div class="comment" style="direction:ltr;">
        <h4><div style="float:right">{{ $comment->name }}</div>
          <div style="margin-right:10px; width:150px; float:right; "><small style="font-size:12px;">  ({{ $comment->created_at }}) </small></div>
        </h4>

        <div class="text" style="clear:both">{{ $comment->text }}</div>
      </div>
    @endforeach
  </div>
</div>