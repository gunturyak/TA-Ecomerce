<x-frontend-no-banner>
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Shop</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                @foreach ($list_produk as $produk)
                <!-- Start Column 1 -->
                <div class="col-12 col-md-4 col-lg-4 mb-5">
                    <a class="product-item" href="{{url('Cart')}}">
                        <img src="{{url('/')}}/front-assets/images/produk-1.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">{{$produk->varian_produk}}</h3>
                        <strong class="product-price">RP. {{$produk->harga_produk}}</strong>

                        <span class="icon-cross">
                            <img src="{{url('/')}}/front-assets/images/cart.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 1 -->
                @endforeach
              

            </div>
        </div>
    </div>

</x-frontend-no-banner>