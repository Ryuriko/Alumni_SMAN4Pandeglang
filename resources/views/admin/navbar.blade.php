<nav id="sidebar">
        <div class="custom-menu z-3">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
            </button>
        </div>

        <div class="img bg-wrap text-center py-4" style="background-image: url(sidebar/images/bg_1.jpg);">
            <div class="user-logo">
                <div class="img" style="background-image: url(sidebar/images/logo.jpg);"></div>
                <h3 class="text-capitalize">{{ auth()->user()->name }}</h3>
            </div>
        </div>
    <ul class="list-unstyled components mb-2">
        <li>
            <a href="/"><span class="fa fa-home mr-3"></span> Kembali Ke Home</a>
        </li>
        <li class="{{ Request::is('admin*') ? 'active' : '' }}">
            <a href="/admin"><span class="fa fa-gift mr-3"></span> Kelola Postingan</a>
        </li>
        <li class="{{ Request::is('ika*') ? 'active' : '' }}">
            <a href="/ika/create"><span class="fa fa-download mr-3"></span> Kelola Program Kerja</a>
        </li>
        <!-- <li>
            <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
        </li> -->
    </nav>
</ul>
