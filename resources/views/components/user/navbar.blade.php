<header class="brin-navbar">
    <div class="container-fluid">
        <div class="row align-items-center">

            {{-- LOGO --}}
            <div class="col-lg-3">
                <a href="/" class="brand text-decoration-none">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="BRIN Logo">
                    <div>
                        <h6>BRIN</h6>
                        <span>EVENT MANAGEMENT</span>
                    </div>
                </a>
            </div>

            {{-- SEARCH --}}
            <div class="col-lg-3">
                <form action="{{ route('events.index') ?? '#' }}" method="GET" class="search-box">
                    <input type="text" name="search" class="form-control" placeholder="Search events...">
                    <button type="submit">
                        <img src="{{ asset('assets/images/search.svg') }}">
                    </button>
                </form>
            </div>

            {{-- MENU --}}
            <div class="col-lg-5">
                <nav>
                    <ul class="nav justify-content-center gap-5">
                        <li>
                            <a href="/" class="{{ request()->is('/')?'active':'' }}">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="/events" class="{{ request()->is('events*')?'active':'' }}">
                                Events
                            </a>
                        </li>

                        <li>
                            <a href="/calendar">
                                Calendar
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            {{-- LOGIN --}}
            <div class="col-lg-1 text-end">
                @auth
                    <a href="/dashboard" class="signin">
                        Dashboard
                    </a>
                @else
                    <a href="/login" class="signin">
                        Sign in
                    </a>
                @endauth
            </div>

        </div>
    </div>
</header>
