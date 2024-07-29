<x-frontend>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Toko</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{url('shop')}}">Belanja</a></li>
            <li class="breadcrumb-item active text-white">Ditail Produk</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-12 col-xl-12">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="border rounded">
                                <div id="carousel-{{ $produk->id }}" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach($produk->carousels as $index => $carousel)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img src="{{ asset($carousel->gambar) }}" class="img-fluid rounded-top w-100" alt="">
                                        </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-{{ $produk->id }}" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-{{ $produk->id }}" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-4">Rasakan kenikmatan keripik gurih Opak Udang...</p>
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="px-2">
                                <div class="row g-4">
                                    <div class="col-12 mb-3">
                                        <div class="row bg-light align-items-center text-center justify-content-center py-2">
                                            <div class="col-6">
                                                <p class="mb-0">Berat</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">100 gr</p>
                                            </div>
                                        </div>
                                        <div class="row text-center align-items-center justify-content-center py-2">
                                            <div class="col-6">
                                                <p class="mb-0">Rasa</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Original,Balado Dan Jagung bakar</p>
                                            </div>
                                        </div>
                                        <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                        </div>
                                        <div class="row text-center align-items-center justify-content-center py-2">
                                            <div class="col-6">
                                                <p class="mb-0">Harga</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Rp.16000</p>
                                            </div>
                                        </div>
                                        <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                            <div class="col-6">
                                                <p class="mb-0">Min Berat</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">50 gr</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <form action="{{ route('add-to-cart') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-2 mt-2">

                                        <div class="input-group quantity mb-3" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-sm btn-minus rounded-circle bg-light border">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" name="quantity" class="form-control form-control-sm text-center border-0" value="1">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-sm btn-plus rounded-circle bg-light border">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">

                                        <input type="hidden" name="id" value="{{ $produk->id }}">
                                        <button type="submit" class="btn border border-secondary rounded-pill py-2 mb-4 text-primary">
                                            <i class="fa fa-shopping-bag me-2 text-primary"></i> Masukan Ke Keranjang
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link active border-white border-bottom-0" type="button" role="tab" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" aria-controls="nav-about" aria-selected="true">Keterangan Produk</button>

                                </div>
                            </nav>
                            <div class="tab-content mb-5">
                                <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <p>
                                        Nikmati keajaiban rasa dengan Opak Udang! Camilan istimewa yang terbuat dari campuran ubi dan udang segar, diolah dengan bumbu rahasia yang memanjakan lidah Anda.
                                        Setiap potongan Opak Udang diolah dengan cermat untuk memastikan tekstur yang renyah dan rasa udang yang gurih.
                                        Dibuat dari bahan alami tanpa pengawet dan pewarna buatan, Opak Udang sehat dan aman untuk dinikmati setiap hari.
                                        Kandungan protein dari udang memberikan nilai gizi tambahan di setiap gigitan.
                                        Dikemas dalam bungkus praktis dan higienis, Opak Udang mudah dibawa ke mana saja dan dinikmati kapan saja.
                                        Dengan harga hanya Rp. 16.000 per bungkus, Opak Udang adalah pilihan camilan yang lezat dan ekonomis untuk semua kalangan! Segera dapatkan di toko terdekat atau pesan online sekarang juga!
                                    </p>
                                    <div class="px-2">
                                        <div class="row g-4">
                                            <div class="col-6">
                                                <div class="row bg-light align-items-center text-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Berat</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">100 gr</p>
                                                    </div>
                                                </div>
                                                <div class="row text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Varian</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">Original,Balado Dan Jagung bakar</p>
                                                    </div>
                                                </div>
                                                <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Harga</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">RP. 16.000</p>
                                                    </div>
                                                </div>
                                                <div class="row text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Min Berat</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">50 gr</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                    <div class="d-flex">
                                        <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                        <div class="">
                                            <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                            <div class="d-flex justify-content-between">
                                                <h5>Jason Smith</h5>
                                                <div class="d-flex mb-3">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p>The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic
                                                words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                        <div class="">
                                            <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                            <div class="d-flex justify-content-between">
                                                <h5>Sam Peters</h5>
                                                <div class="d-flex mb-3">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <p class="text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic
                                                words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="nav-vision" role="tabpanel">
                                    <p class="text-dark">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                        amet diam et eos labore. 3</p>
                                    <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                        Clita erat ipsum et lorem et sit</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    </div>

    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.btn-plus, .btn-minus').on('click', function(e) {
                const isPositive = $(this).hasClass('btn-plus');
                const input = $(this).closest('.quantity').find('input[name="quantity"]');
                if (input.is('input')) {
                    input.val(Math.max(1, parseInt(input.val()) + (isPositive ? 1 : -1)));
                }
            });
        });
    </script>

    <!-- Single Product End -->
</x-frontend>