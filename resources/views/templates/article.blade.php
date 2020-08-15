<div class="post mb-5">
    <header>
        <h2><a href="#">{{$post->title}}</a></h2>
    </header>
    <div class="content">
        <p>{{$post->text}}</p>
    </div>
    <footer class="meta">
        <h4>{{$post->user->name}}</h4>
        @<strong>{{$post->comments->count()}} Comments</strong>
    </footer>
</div>





