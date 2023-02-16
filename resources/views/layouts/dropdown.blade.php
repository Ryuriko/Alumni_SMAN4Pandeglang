@guest
<li>
    <div class="dropdown ms-4 mt-3">
        <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Log In
        </button>
        <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-bg-dark" href="/signin">Sign In</a></li>
            <li><a class="dropdown-item text-bg-dark" href="/login">Log In</a></li>
        </ul>
    </div>
</li>
@endguest

@auth

@if(auth()->user()->auth == "alumni")
    <li>
        <div class="dropdown ms-4 mt-3">
            <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="text-uppercase">{{ auth()->user()->auth }}</span>
            </button>
            <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item text-bg-dark" href="/alumni/registrasi">Masuk Halaman Alumni</a></li>
                <li>
                    <form class="text-bg-dark ps-2" action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item text-bg-dark">Log Out</button>
                    </form>
                </li>
            </ul>
        </div>
    </li>
@endif

@if(auth()->user()->auth == "ika")
    <li>
        <div class="dropdown ms-4 mt-3">
            <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="text-uppercase">{{ auth()->user()->auth }}</span>
            </button>
            <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item text-bg-dark" href="/ikaa/programkerja">Program Kerja</a></li>
                <li>
                    <form class="dropdown-item text-bg-dark ps-2" action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item text-bg-dark">Log Out</button>
                    </form>
                </li>
            </ul>
        </div>
    </li>
@endif

@if(auth()->user()->auth == "admin")
    <li>
        <div class="dropdown ms-4 mt-3">
            <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="text-uppercase">{{ auth()->user()->auth }}</span>
            </button>
            <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item text-bg-dark" href="/admin">Masuk Halaman Admin</a></li>
                <li>
                    <form class="dropdown-item text-bg-dark ps-2" action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item text-bg-dark">Log Out</button>
                    </form>
                </li>
            </ul>
        </div>
    </li>
@endif

@endauth