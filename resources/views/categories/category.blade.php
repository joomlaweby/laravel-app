<article class="uk-article uk-margin-bottom">
    <h2 class="uk-article-title"><a href="/categories/{{ $category->slug }}">{{$category->title}}</a></h2>
    <div class="uk-margin-bottom">{{$category->text}}</div>
    <div class="uk-grid-small uk-child-width-auto" uk-grid>

        <div>
            <a class="uk-button uk-button-text" href="/categories/{{ $category->slug }}">Read more</a>
        </div>
        <div>
            <a class="uk-button uk-button-text" href="/categories/{{ $category->slug }}"></a>
        </div>
    </div>
</article>






