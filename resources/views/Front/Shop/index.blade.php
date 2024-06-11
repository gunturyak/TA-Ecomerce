<x-frontend>
    <style>
        .fruite-img {
            position: relative;
            overflow: hidden;
            height: 300px;
            /* Set your desired fixed height here */
            width: 100%;
            /* Ensure the container takes full width */
        }

        .fruite-img img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-height: 100%;
            min-width: 100%;
            object-fit: cover;
            /* Ensures the image covers the container */
        }

        .fruite .tab-class .nav-item a.active {
            background: var(--bs-secondary) !important;
        }

        .fruite .tab-class .nav-item a.active span {
            color: var(--bs-white) !important;
        }

        .fruite .fruite-categorie .fruite-name {
            line-height: 40px;
        }

        .fruite .fruite-categorie .fruite-name a {
            /* Removed the transition for hover effect */
            /* transition: 0.5s; */
        }

        .fruite .fruite-categorie .fruite-name a:hover {
            color: var(--bs-secondary);
        }

        .fruite .fruite-item {
            height: 100%;
            /* Removed the transition for hover effect */
            /* transition: 0.5s; */
        }

        .fruite .fruite-item:hover {
            /* Removed the box-shadow effect on hover */
            /* box-shadow: 0 0 55px rgba(0, 0, 0, 0.4); */
        }

        .fruite .fruite-item .fruite-img {
            overflow: hidden;
            /* Removed the transition effect */
            /* transition: 0.5s; */
            border-radius: 10px 10px 0 0;
        }

        .fruite .fruite-item .fruite-img img {
            /* Removed the transition effect */
            /* transition: 0.5s; */
        }

        .fruite .fruite-item .fruite-img img:hover {
            /* Removed the transform effect on hover */
            /* transform: scale(1.3); */
        }
    </style>
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Shop</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Shop</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4">Fresh fruits shop</h1>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-xl-3">
                            <div class="input-group w-100 mx-auto d-flex">
                                <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-xl-3">
                            <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                <label for="fruits">Default Sorting:</label>
                                <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3" form="fruitform">
                                    <option value="volvo">Nothing</option>
                                    <option value="saab">Popularity</option>
                                    <option value="opel">Organic</option>
                                    <option value="audi">Fantastic</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">

                        <div class="col-lg-12 pt-5">
                            <div class="row g-4 justify-content-center">
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <a href="{{url('shop-detail')}}">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="{{url('/')}}/front/gambar/opangc.PNG" class="img-fluid rounded-top w-100" alt="">
                                            </div>

                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Original</h4>

                                                <div class="d-flex justify-content-between flex-lg-wrap">

                                                    <p class="text-dark fs-5 fw-bold mb-0">RP.16.000</p>
                                                    <a href="{{url('chart')}}" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="{{url('/')}}/front/gambar/opangc.PNG" class="img-fluid w-100 rounded-top" alt="">
                                        </div>

                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Balado</h4>

                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">RP.16.000</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="{{url('/')}}/front/gambar/opangc.PNG" class="img-fluid w-100 rounded-top" alt="">
                                        </div>

                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Jagung Bakar</h4>

                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">RP.16.000</p>
                                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-4.jpg" class="img-fluid w-100 rounded-top" alt="">
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


</x-frontend>