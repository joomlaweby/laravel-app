<section id="tags" class="tags">

    <ol class="tag-list">
        @foreach($article->tags as $tag)
            <li>
                @include('tags.show')
            </li>
        @endforeach
    </ol>
</section>
