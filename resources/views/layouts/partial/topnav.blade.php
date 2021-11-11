<div class="top-nav">

    <ion-icon  class="top-nav-button"  name="menu-outline" onclick="openNav()"></ion-icon>
    <div id="myNav" class="overlay">
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!-- Overlay content -->
        <div class="overlay-content">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
            @if(Auth::check())
            @Auth::user()->hasRole('admin')
            <li>
                <a class="nav-link" href="{{ route('users.index') }}">
                    Manage Users
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('roles.index') }}">
                    Manage Role
                </a>
            </li>
            @endif
        </div>
    </div>
</div>
