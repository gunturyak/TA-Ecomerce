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
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">

                    <h1 class="mb-5 display-3 text-primary center-text">Selamat Datang Di Produk Opang</h1>

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


            <!-- Featurs Section Start -->

            <!-- Featurs Section End -->


            <!-- Fruits Shop Start-->
            <div class="container-fluid fruite py-5">
                <div class="container">
                    <div class="tab-class">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <h1>
                                    PRODUK OPANG
                                </h1>
                            </div>

                        </div>
                        <div class="tab-content">

                            <div id="tab-3" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="row g-4">
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="{{url('/')}}/front/img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                        <h4>Oranges</h4>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="{{url('/')}}/front/img/fruite-item-6.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                        <h4>Apple</h4>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
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
                </div>
            </div>
            <!-- Fruits Shop End-->


            <!-- Featurs Start -->
            <div class="container-fluid service">
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
            </div>
            <!-- Featurs End -->

</x-frontend>