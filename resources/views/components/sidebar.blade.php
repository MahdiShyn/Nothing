<div class="sidebar-content">
    <div class="box-shadow">
        <div class="mb-3">
            <h2 style="display:flex;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-newspaper mr-3" viewBox="0 0 16 16">
                    <path
                        d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                    <path
                        d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                </svg>
                News in Blog :
            </h2>
        </div>
        <hr>
        <ul class="mt-3">
            <li>
                <a href="" class="link-dark" style="text-decoration: none;">aaaaaaaaaa</a>
            </li>
            <li>
                <a href="" class="link-dark" style="text-decoration: none;">aaaaaaaaaa</a>
            </li>
            <li>
                <a href="" class="link-dark" style="text-decoration: none;">aaaaaaaaaa</a>
            </li>
            <li>
                <a href="" class="link-dark" style="text-decoration: none;">aaaaaaaaaa</a>
            </li>
            <li>
                <a href="" class="link-dark" style="text-decoration: none;">aaaaaaaaaa</a>
            </li>
            <li>
                <a href="" class="link-dark" style="text-decoration: none;">aaaaaaaaaa</a>
            </li>
            <li>
                <a href="" class="link-dark" style="text-decoration: none;">aaaaaaaaaa</a>
            </li>
            <li>
                <a href="" class="link-dark" style="text-decoration: none;">aaaaaaaaaa</a>
            </li>
            <li>
                <a href="" class="link-dark" style="text-decoration: none;">aaaaaaaaaa</a>
            </li>
            <li>
                <a href="" class="link-dark" style="text-decoration: none;">aaaaaaaaaa</a>
            </li>
        </ul>
    </div>
    @guest
    <div class="box-shadow">
        <div class="mb-3">
            <h2 style="display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-circle mr-3" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                Log In :
            </h2>
        </div>
        <hr>
        <div class="mt-3">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-row">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                            required autofocus>
                    </div>
                </div>
                <div class="form-row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('register') }}">new user ? regester now !</a>
                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        <button class="btn btn-success" style="padding:10px 90px;border-radius:40px;">Log in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endguest
    @auth
    <div class="box-shadow">
        <h2 class="mb-3" style="display:flex;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-person-circle mr-2" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            Your Profile :
        </h2>
        <hr>
        <div class="mt-3 mb-3">
            <li>
                You are log in as <b class="text-danger"> {{ @Auth::user()->name }}</b>.
            </li>
        </div>
        <div>
            <li>
                You have<b class="text-danger"> {{ count(@Auth::user()->customer->carModels) }} </b>cars.
            </li>
        </div>
        <div class="mt-3 row">
            <a href="{{ route('dashboard') }}" class="btn btn-success col">dashboard</a>
            <form method="POST" action="{{ route('logout') }}" class="col" x-data>
                @csrf
                <a type="button" class="btn btn-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();" style="margin-right: 3px;">
                    Log Out
                </a>
            </form>
        </div>
    </div>
    @endauth
</div>
