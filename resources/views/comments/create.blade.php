@include('forms.errors')
<form action="/comments" method="POST" class="">
    @csrf
    <label>Comment</label>
    <textarea name="text" class="uk-textarea uk-margin-bottom" rows="5"></textarea>
    <input name="article_id" type="hidden" value="{{ $article->id }}">
    <button class="uk-button uk-button-primary" type="submit">Submit</button>
</form>
