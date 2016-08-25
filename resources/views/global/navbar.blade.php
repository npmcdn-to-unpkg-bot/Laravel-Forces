<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Forces</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Add Player</a></li>
            <li><a href="#">Make a Team</a></li>
            <li><a href="{{ action("PlayerController@editPlayer") }}">Edit Player</a></li>
        </ul>
    </div>
</nav>