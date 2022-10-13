<div class="menu">
    <img src="image/iconProfile.png" alt="">
    <p>{{ Auth::user()->name }}  </p>
    <div class="txt">
        <p>Universitas Bina Nusantara</p>
    </div>
    <div class="menuDetails">
        <div class="Profile">
            <a href="/profile">
                <button>
                    <img src="image/User.png" alt="">
                    <p>Profile</p>
                </button>
            </a>
        </div>
        <div class="Event">
            <a href="/eventprofile">
                <button>
                    <img src="image/Event.png" alt="">
                    <p>Event</p>
                </button>
            </a>
        </div>
        <div class="Membership">
            <a href="/membershipprofile">
                <button>
                    <img src="image/Membership.png" alt="">
                    <p>Membership</p>
                </button>
            </a>
        </div>
        <div class="Security">
            <a href="/security">
                <button>
                    <img src="image/Security.png" alt="">
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
