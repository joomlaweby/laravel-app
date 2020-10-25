<section id="tags" class="tags">

    <ol class="tag-list">
        @foreach($article->tags as $tag)
            <li>
                @include('tags.edit')
            </li>
        @endforeach
    </ol>
</section>
