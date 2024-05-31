<x-admin>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                        <div class="card-header">
                            <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">TAMBAH DATA PRODUK</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ url('Admin/Produk') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
                                <div class="card mt-2">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="card" style="width: 25rem;">
                                                <div class="card-body">
                                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            @foreach($produk->carousels as $index => $carousel)
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                                            @endforeach
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            @foreach($produk->carousels as $index => $carousel)
                                                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                <img class="d-block w-100" src="{{ asset($carousel->gambar) }}" alt="{{ $carousel->alt_text }}">
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                            <span class="carousel-control-custom-icon" aria-hidden="true">
                                                                <i class="fas fa-chevron-left"></i>
                                                            </span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                            <span class="carousel-control-custom-icon" aria-hidden="true">
                                                                <i class="fas fa-chevron-right"></i>
                                                            </span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <dt class="font-weight-bold">NAMA PRODUK</dt>
                                                <dd>{{ $produk->nama_produk }}</dd>
                                            </div>
                                            <div class="col-md-6">
                                                <dt class="font-weight-bold">HARGA</dt>
                                                <dd>Rp. {{ number_format($produk->harga_produk) }}</dd>
                                            </div>
                                            <div class="col-md-6">
                                                <dt class="font-weight-bold">VARIAN</dt>
                                                <dd>{{ $produk->varian_produk }}</dd>
                                            </div>
                                            <div class="col-md-6">
                                                <dt class="font-weight-bold">STOK</dt>
                                                <dd>{{ $produk->stok_produk }}</dd>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <dt class="font-weight-bold">DESKRIPSI</dt>
                                                <textarea class="form-control" rows="10" disabled>{{ strip_tags($produk->deskripsi_produk) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</x-admin>