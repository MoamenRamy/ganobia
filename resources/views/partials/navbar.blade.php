<!-- NAVBAR -->
<header class="navbar fixed-nav">

    <!-- Logo -->
    <div class="nav-left">

        <button id="toggleSidebar" class="toggle-btn">
            ☰
        </button>

        <div class="logo">
            <img src="{{ asset('images/logo-light.png') }}" alt="logo">
        </div>

    </div>

    <!-- Search -->
    <div class="nav-center">
        <input type="text" class="search" placeholder="البحث ...">
    </div>

    <!-- Right Side -->
    <div class="nav-right">

        @if (Route::has('login'))

            <nav class="auth-nav">

                @auth

                    <a href="{{ url('/user/profile') }}" class="profile-btn">
                        👤 Profile
                    </a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button type="submit" class="logout-btn">
                            ⎋ Logout
                        </button>

                    </form>
                @else
                    <a href="{{ route('login') }}" class="login-btn">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="register-btn">
                            Register
                        </a>
                    @endif

                @endauth

            </nav>

        @endif

    </div>

</header>

