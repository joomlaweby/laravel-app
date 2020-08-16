<article class="comment">
    <div class="content">
        {{ $comment->text }}
    </div>
    <div>
        <a href="/users/{{ $comment->user->id }}" class="author">
            <strong>{{ $comment->user->name }}</strong>
        </a>
        <time class="">
            {{ $comment->created_at->format('d/m/Y') }}
        </time>
    </div>
</article>
