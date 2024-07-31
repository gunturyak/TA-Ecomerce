<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li> --}}
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/')}}" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="https://th.bing.com/th/id/OIP.lvzPu-WOW4Iv7QyjP-IkrgAAAA?rs=1&pid=ImgDetMain" style="height: 25px; width: 25px;object-fit:cover;border-radius:50%" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="{{url('Logout')}}" class="dropdown-item">
                    <i class="fas fa-sign-out mr-2"></i> Logout
                </a>
            </div>
        </li>
    </ul>
    <style>
        .sidebar {
           position: fixed;
           overflow-y: auto;
       }
       
   </style>
</nav>