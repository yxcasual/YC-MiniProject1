<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('viewmessages')}}">View Messages</a>
        </li>
    </ul>


    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
            <a class="nav-link" href="{{route('signup')}}">Sign Up</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('signin')}}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>

    </ul>
</div>
</nav>