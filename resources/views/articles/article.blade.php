<article class="uk-article uk-margin-bottom">
    <h2 class="uk-article-title"><a href="/articles/{{ $article->id }}">{{$article->title}}</a></h2>
    <p class="uk-article-meta">Written by <a href="#">{{$article->user->name}}</a> on {{ $article->created_at->format('d/m/Y') }}. Posted in <a href="#">Blog</a></p>
    <div class="uk-margin-bottom">{{$article->text}}</div>
    <div class="uk-grid-small uk-child-width-auto" uk-grid>

        <div>
            <a class="uk-button uk-button-text" href="/articles/{{ $article->id }}">Read more</a>
        </div>
        <div>
            <a class="uk-button uk-button-text" href="/articles/{{ $article->id }}">{{$article->comments->count()}} {{ str_plural('comment' , $article->comments->count()) }}</a>
        </div>
    </div>
</article>






