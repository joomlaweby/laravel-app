<div class="article mb-5 {{ $type }}">
    <header>
        <h2><a href="/articles/{{ $article->id }}">{{$article->title}}</a></h2>
    </header>
    <div class="content">
        <p>{{$article->text}}</p>
    </div>
    <footer class="meta">
        <h4>{{$article->user->name}}</h4>
        <strong><a href="/articles/{{ $article->id }}">{{$article->comments->count()}} {{ str_plural('comment' , $article->comments->count()) }}</a></strong>
    </footer>
</div>





