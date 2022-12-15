<div class="menu">
    <img src="{{ asset('image/iconProfile.png')}}" alt="">
    <p>{{ Auth::user()->name }}  </p>
    <div class="txt">
        <p>{{ Auth::user()->institution }}</p>
    </div>
    <div class="menuDetails">
        <div class="Profile">
            <a href="{{ route('profile-index')}}">
                <button>
                    <img src="{{ asset('image/User.png')}}" alt="">
                    <p>Profile</p>
                </button>
            </a>
        </div>
        <div class="Event">
            <a href="{{ route('profile-event')}}">
                <button>
                    <img src="{{ asset('image/Event.png')}}" alt="">
                    <p>Event</p>
                </button>
            </a>
        </div>
        <div class="Membership">
            <a href="{{ route('profile-membership') }}">
                <button>
                    <img src="{{ asset('image/Membership.png')}}" alt="">
                    <p>Membership</p>
                </button>
            </a>
        </div>
        <div class="Security">
            <a href="{{ route('profile-security') }}">
                <button>
                    <img src="{{ asset('image/Security.png')}}" alt="">
                    <p>Security</p>
                </button>
            </a>
        </div>
        <div class="help">
            <a href="">Butuh Bantuan?</a>
        </div>

        <form action="/logout" method="POST">
            @csrf
            <div class="logOut">
                <button type="submit"class="btn btn-danger">Log Out</button>

            </div>
        </form>
    </div>
</div>
