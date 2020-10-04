<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="uk-active "><a href="/@if(Request::segment(1) != 'admin'){{ Request::segment(1) }}@else()admin/{{ Request::segment(2) }}@endif/create" class="uk-button uk-button-small uk-button-primary">New</a></li>
            <li class="uk-parent"><a href="" class="uk-button uk-button-small uk-button-default">Publish</a></li>
            <li class="uk-parent"><a href="" class="uk-button uk-button-small uk-button-default">Unpublish</a></li>
            <li class="uk-parent"><a href="" class="uk-button uk-button-small uk-button-default">Delete</a></li>
            <li><a href=""></a></li>
        </ul>
    </div>
</nav>
