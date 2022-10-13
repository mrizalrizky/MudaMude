@auth
<header>
    <img class="logo" src="image/Logo.png" alt="">
    <div class="navBar">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('community') }}">Community</a>
        <a href="{{ url('event') }}">Event</a>
        <a href="{{ url('partnership') }}">Partnership</a>
        <a href="{{ url('about') }}">About</a>
    </div>
    <div class="profile">
        <div class="user">
            <a href="{{ url('profile') }}">Hello, {{ Auth::user()->name }}</a>
        </div>
        <a href="{{ url('profile') }}"><img src="image/Profile.png" alt=""></a>
     </div>
</header>

@else
<header>
    <img class="logo" src="image/logo.png" alt="">
    <div class="navBar">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/community') }}">Community</a>
        <a href="{{ url('/event') }}">Event</a>
        <a href="{{ url('/partnership') }}">Partnership</a>
        <a href="{{ url('/about') }}">About</a>
    </div>
    <div class="login">
        <button><a href="{{ url('login') }}">Login</a></button>
    </div>
</header>
@endauth
