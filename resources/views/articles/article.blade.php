<div class="article mb-5">
    <header>
        <h2><a href="#">{{$article->title}}</a></h2>
    </header>
    <div class="content">
        <p>{{$article->text}}</p>
    </div>
    <footer class="meta">
        <h4>{{$article->user->name}}</h4>
        <strong>{{$article->comments->count()}} {{ str_plural('comment' , $article->comments->count()) }}</strong>
    </footer>
</div>





