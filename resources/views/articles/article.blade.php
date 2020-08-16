<div class="card mb-5">
    <div class="card-body">
        <h2 class="card-title"><a href="/articles/{{ $article->id }}">{{$article->title}}</a></h2>
        <p class="card-text">{{$article->text}}</p>
        <footer class="meta">
            <h4>{{$article->user->name}}</h4>
            <strong><a href="/articles/{{ $article->id }}">{{$article->comments->count()}} {{ str_plural('comment' , $article->comments->count()) }}</a></strong>
        </footer>
        <a href="/articles/{{ $article->id }}" class="btn btn-primary">Read more</a>
    </div>
</div>






