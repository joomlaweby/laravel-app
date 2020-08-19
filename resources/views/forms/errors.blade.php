@if($errors->any())
    <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <h4>Please check the form</h4>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
