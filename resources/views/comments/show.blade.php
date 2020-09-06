<content-comment inline-template>
    <article class="uk-comment">
        <header class="uk-comment-header">
            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <img class="uk-comment-avatar" src="images/avatar.jpg" width="80" height="80" alt="">
                </div>
                <div class="uk-width-expand">
                    <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="/users/{{ $comment->user->id }}">{{ $comment->user->name }}</a></h4>
                    <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                        <li><time datetime="{{ $comment->created_at->toW3cString() }}" class="text-muted">
                                {{ $comment->created_at->diffForHumans() }}
                            </time></li>
                        <li><a href="#">Reply</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="uk-comment-body">
            <p>{{ $comment->text }}</p>
        </div>
    </article>
</content-comment>

