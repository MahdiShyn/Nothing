<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom mb-3"
style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">CarWash</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
            <ul class="navbar-nav flex-grow-1">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('privacy') }}">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('privacy') }}">About us</a>
                </li>
            </ul>
            @auth
            <ul class="nav">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a type="button" class="btn btn-outline-danger " href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                            style="margin-right: 3px; border-radius: 40px; padding:7px 30px;" >
                            Log Out
                        </a>
                    </form>
                </li>
            </ul>
            @endauth
            @guest
                <ul class="nav">
                    <li class="nav-item">
                        <a type="button" class="btn btn-outline-primary "
                            style="margin-right: 3px; border-radius: 40px; padding: 7px 30px;" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="btn btn-outline-info " style="margin-left: 3px; border-radius: 40px; padding: 7px 30px;" href="{{ route('register') }}">
                            Sign up
                        </a>
                    </li>
                </ul>
            @endguest
        </div>
    </div>
</nav>