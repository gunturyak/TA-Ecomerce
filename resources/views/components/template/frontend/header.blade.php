<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="{{url('Home')}}">Opang<span>.CO</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ request()->is('Home') ? 'active' : ''}}">
                    <a class="nav-link " href="{{url('Home')}}">Home</a>
                </li>
                <li class="nav-item {{ request()->is('Shop') ? 'active' : ''}}"><a class="nav-link" href="{{url('Shop')}}">Shop</a></li>
                <li class="nav-item {{ request()->is('About') ? 'active' : ''}}"><a class="nav-link" href="{{url('About')}}">About us</a></li>
                <li class="nav-item {{ request()->is('Blog') ? 'active' : ''}}"><a class="nav-link" href="blog.html">Blog</a></li>
                <li class="nav-item {{ request()->is('Contact') ? 'active' : ''}}"><a class="nav-link" href="contact.html">Contact us</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="{{url('/')}}/front-assets/images/user.svg"></a></li>
                <li><a class="nav-link" href="{{url('Cart')}}"><img src="{{url('/')}}/front-assets/images/cart.svg"></a></li>
            </ul>
        </div>
    </div>

</nav>