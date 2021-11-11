<div class="top-nav">
    <span class="material-icons top-nav-button" onclick="openNav()">
        menu
    </span>
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

            @can('admin')
            <li>
                <a class="nav-link" href="{{ route('users.index') }}">
                    Manage Users
                </a>
            </li>
            @endif
            @can('role-list')
            <li>
                <a class="nav-link" href="{{ route('roles.index') }}">
                    Manage Role
                </a>
            </li>

            @endcan
            @endif
        </div>

    </div>
</div>
