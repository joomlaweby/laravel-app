<section id="comments" class="comments">
    @auth
        @include('comments.create')
    @endauth
    <ol class="comment-list">
        @foreach($article->comments as $comment)
            <li>
                @include('comments.show')
            </li>
        @endforeach
    </ol>
</section>
