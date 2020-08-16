<article class="comment">
    <div class="content">
        {{ $comment->text }}
    </div>
    <div>
        <a href="/users/{{ $comment->user->id }}" class="author">
            <strong>{{ $comment->user->name }}</strong>
        </a>
        <time class="text-muted">
            {{ $comment->created_at->diffForHumans() }}
        </time>
    </div>
</article>
