<x-frontend>

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Hero Start -->
    <div class="container-fluid  hero-header" style="background-image: url(./front/gambar/pang.jpg); height: 80vh">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">

                    <h1 class="mb-5 display-3" style="color: #fff;">Selamat Datang Di Produk Opang</h1>

                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="{{url('/')}}/front/gambar/opang.png" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded"></a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="{{url('/')}}/front/gambar/opang.png" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero End -->

            <div class="container-fluid fruite ">
                <div class="container">
                    <div class="tab-class">
                        <div class="row">
                            <div class="col-lg-4">
                                <h1 style="color: white;">
                                    PRODUK OPANG
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container-fluid service">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <a href="#">
                                <div class="service-item bg-secondary rounded border border-secondary">
                                    <img src="{{url('/')}}/front/img/opangc.PNG" class="img-fluid rounded-top w-100" alt="">
                                    <div class="px-4 rounded-bottom">
                                        <div class="service-content bg-primary text-center p-4 rounded">
                                            <h5 class="text-white">Balado</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a href="#">
                                <div class="service-item bg-dark rounded border border-dark">
                                    <img src="{{url('/')}}/front/img/opangc.PNG" class="img-fluid rounded-top w-100" alt="">
                                    <div class="px-4 rounded-bottom">
                                        <div class="service-content bg-light text-center p-4 rounded">
                                            <h5 class="text-primary">Original</h5>


                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a href="#">
                                <div class="service-item bg-primary rounded border border-primary">
                                    <img src="{{url('/')}}/front/img/opangc.PNG" class="img-fluid rounded-top w-100" alt="">
                                    <div class="px-4 rounded-bottom">
                                        <div class="service-content bg-secondary text-center p-4 rounded">
                                            <h5 class="text-white">Jagung Bakar</h5>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Featurs End -->
        </div>
    </div>
    <div class="section">
        <div class="section-body">
            <div class="product-catalog grid">
                <div class="p-3 " style="background-color: #43AA34;color:#fff;">
                    <div class="media-absolute">
                        <!-- <img class=" ls-is-cached lazyloaded" data-src="/media/2023/09/05/e1df1e9c-5d34-4cdc-9fe1-f52f2ec5f863.png" alt="Kusuka" src="/media/2023/09/05/e1df1e9c-5d34-4cdc-9fe1-f52f2ec5f863.png">
                        <img class=" ls-is-cached lazyloaded" data-src="/media/2023/09/05/deb67ec3-93ab-4ca4-b695-2d73deaf71aa.png" alt="Kusuka" src="/media/2023/09/05/deb67ec3-93ab-4ca4-b695-2d73deaf71aa.png"> -->
                    </div>
                    <div class="media-dialog section-dialog container lg:flex">
                        <div class="media-image">
                            <img class="ls-is-cached lazyloaded" style="height: 400px; margin-top: 50px;" src="{{url('/')}}/front/img/opang a.png">
                        </div>
                        <div class="media-body flex-1">
                            <h1>OPANG Original Chips</h1>
                            <div class="content">
                                <p>
                                    Di buat dari bahan ubi dan udang, keripik opang yang renyah dan lezat menjadi favorit semua orang yang mencobanya! tersedia beberapa varian rasa
                                </p>
                                <div class="mt-6 lg:mt-8">
                                    <a href="{{ route('shop-detail', ['produk' => 'Original']) }}" class="btn btn-primary">Detail Produk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="p-3" style="background-color: #ffad32;color:#fff;">
                            <div class="media-absolute">
                                <img class=" ls-is-cached lazyloaded" data-src="/media/2023/09/27/d514b291-841c-4176-ba52-eb7c4548ac83.png" alt="" src="/media/2023/09/27/d514b291-841c-4176-ba52-eb7c4548ac83.png">
                            </div>

                            <div class="media-dialog section-dialog container lg:flex">
                                <div class="media-image-bottom jagung-bakar">
                                    <img class="ls-is-cached lazyloaded jagung-bakar" style="height: 400px; padding-inline:30px; transform: rotate(-10deg);" alt="" src="{{url('/')}}/front/img/opang a.png">
                                </div>
                                <div class=" media-body flex-1">
                                    <h3>OPANG Jagung Bakar Chips</h3>
                                    <div class="content">
                                        <p>
                                            Belanja Hemat, Kualitas Terjamin!
                                            Dapatkan penawaran menarik setiap hari di toko produk Opang. Belanja lebih hemat dengan harga spesial dan promo menarik
                                        </p>
                                        <div class="mt-6 lg:mt-8">
                                            <a href="{{ route('shop-detail', ['produk' => 'Jagung Bakar']) }}" class="btn btn-primary">Detail Produk</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3" style="background-color: #AC1120;color:#fff;">
                            <div class="media-absolute">
                                <img class=" ls-is-cached lazyloaded" data-src="/media/2023/09/29/3fb993ed-c9ef-422d-9be4-d6913967c95c.png" alt="" src="/media/2023/09/29/3fb993ed-c9ef-422d-9be4-d6913967c95c.png">
                            </div>

                            <div class="media-dialog section-dialog container lg:flex">
                                <div class="media-image-bottom">
                                    <img class=" ls-is-cached lazyloaded " style="height: 400px;  transform: rotate(10deg);" src="{{url('/')}}/front/img/opang a.png">
                                </div>
                                <div class="media-body flex-1">
                                    <h3>OPANG Balado Chips</h3>
                                    <div class="content">
                                        <p>
                                            Jangan tunggu lagi, rasakan manfaat luar biasa dari Opang sekarang juga! Kunjungi website kami atau toko terdekat untuk pembelian.
                                        </p>
                                        <div class="mt-6 lg:mt-8">
                                            <a href="{{ route('shop-detail', ['produk' => 'Balado']) }}" class="btn btn-primary">Detail Produk</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <style>
        .media-dialog {
            display: flex;
            align-items: center;
        }

        .media-image {
            flex: 0 0 auto;
            margin-right: 20px;
            height: 65vh;
        }

        .media-image-bottom {
            flex: 0 0 auto;
            margin-right: 20px;
            height: 60vh;
        }

        .media-body {
            flex: 1 1 auto;
        }

        .media-image img {
            max-width: 100%;
            /* Make sure the image fits its container */
            transform: rotate(10deg);
            filter: drop-shadow(0 10px 20px rgba(255, 255, 255, 0.8));

        }

        .media-image-bottom img {
            max-width: 100%;
            /* Make sure the image fits its container */
            transform: rotate(10deg);
            filter: drop-shadow(0 10px 20px rgba(255, 255, 255, 0.8));
        }
    </style>
</x-frontend>