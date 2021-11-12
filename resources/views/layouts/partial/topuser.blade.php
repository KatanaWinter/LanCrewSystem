{{-- <span class="material-icons top-user-btn" onclick="openUserNav()">
    login
</span> --}}

@auth
<div class="top-user-logged">
    <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" class="top-user-img"
        name="log-in-outline" onclick="openUserNav()">
    <p onclick="openUserNav()">{{ Auth::user()->name }}</p>
    <div id="userNav" class="user-overlay">
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeUserNav()">&times;</a>
        <!-- Overlay content -->
        <div class="overlay-content">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="logoff-btn">Logoff</button>
            </form>
        </div>
    </div>
</div>
@else
<div class="top-user">
    <ion-icon class="top-user-btn" name="log-in-outline" onclick="openUserNav()"></ion-icon>
    <div id="userNav" class="user-overlay">
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeUserNav()">&times;</a>
        <!-- Overlay content -->
        <div class="overlay-content">
            <a href="#">Login</a>
        </div>
    </div>
</div>
@endauth
