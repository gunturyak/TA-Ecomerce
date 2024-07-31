<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="brand-link">
            <img src="{{ url('/') }}/admin-assets/dist/img/Logo Opang.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-bold">Opang A.G</span>
        </a>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item" style="border-bottom:1px solid grey">
                    <a href="{{url('Admin/Dashboard')}}" class="nav-link {{ request()->is('Admin/Dashboard') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link  {{ request()->is('Admin/*Produk') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('Admin/Data-Produk')}}" class="nav-link {{ request()->is('Admin/Data-Produk') ? 'active' : ''}}">
                                <i class="far fa-clipboard nav-icon"></i>
                                <p>Data Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{{url('Admin/Produk')}}}" class="nav-link {{ request()->is('Admin/Produk') ? 'active' : ''}}">
                                <i class="fas fa-box nav-icon"></i>
                                <p>Produk</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <style>
        .main-sidebar {
           position: fixed;
           overflow-y: auto;
       }
       
   </style>
</aside>