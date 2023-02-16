<nav id="sidebar">
        <div class="custom-menu z-3">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
            </button>
        </div>

        <div class="img bg-wrap text-center py-4" style="background-image: url(sidebar/images/bg_1.jpg);">
            <div class="user-logo">
                <div class="img" style="background-image: url(sidebar/images/logo.jpg);"></div>
                @auth
                <h3 class="text-capitalize">{{ auth()->user()->name }}</h3>
                @else
                <h3 class="text-capitalize">Guest</h3>
                @endauth
            </div>
        </div>
    <ul class="list-unstyled components mb-2">
        <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="/"><span class="fa fa-home mr-3"></span> Home</a>
        </li>
        <li class="{{ Request::is('agtsnews*') ? 'active' : '' }}">
            <a href="/agtsnews"><span class="fa fa-download mr-3"></span> Agts News</a>
        </li>
        <li class="{{ Request::is('universitynews*') ? 'active' : '' }}">
            <a href="/universitynews"><span class="fa fa-gift mr-3"></span> University News</a>
        </li>
        <li class="{{ Request::is('schoolarsnews*') ? 'active' : '' }}">
            <a href="/schoolarsnews"><span class="fa fa-trophy mr-3"></span> Schoolars News</a>
        </li>
        <li class="{{ Request::is('jobnews*') ? 'active' : '' }}">
            <a href="/jobnews"><span class="fa fa-cog mr-3"></span> Entrepreneurship/Job News</a>
        </li>
        @include('layouts.dropdown')
    </nav>
</ul>
