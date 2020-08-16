<section id="comments" class="comments">
    <ol class="comment-list">
        @foreach($article->comments as $comment)
            @include('comments.show')
        @endforeach
    </ol>
</section>
