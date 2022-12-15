<header>
    <a href="/">
        <img class="logo" src="{{ asset('image/logo.png') }}" alt="MudaMude Logo">
    </a>
    <div class="navBar">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('community') }}">Community</a>
        <a href="{{ url('event') }}">Event</a>
        <a href="{{ url('partnership') }}">Partnership</a>
        <a href="{{ url('about') }}">About</a>
    </div>
    @auth
    <div class="profile">
        <div class="user">
            <a href="{{ url('profile') }}">Hello, {{ Auth::user()->name }}</a>
        </div>
        <a href="{{ url('profile') }}"><img src="{{ asset('image/Profile.png')}}" alt=""></a>
     </div>
    @else
    <div class="login">
        <button><a href="{{ url('login') }}">Login</a></button>
    </div>
    @endauth
</header>
