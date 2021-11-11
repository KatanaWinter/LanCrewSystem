<div class="top-user">

    {{-- <span class="material-icons top-user-btn" onclick="openUserNav()">
        login
    </span> --}}
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
