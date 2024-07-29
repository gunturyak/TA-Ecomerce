<x-admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"> Data Produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="card-title">Data Produk</h3>
                                </div>

                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="produkTable" class="table table-bordered table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Varian Produk</th>
                                    <th>Stok</th>
                                    <th>Deskripsi</th>
                                    <th>Foto</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_produk as $produk)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $produk->varian_produk }}
                                            </td>
                                            <td>{{ $produk->stok_produk }}</td>
                                            <td style="text-align: justify">{!! ($produk->deskripsi_produk) !!}</td>
                                            <td width="200px" style="position:relative">
                                                <div id="carouselExampleIndicators{{ $loop->iteration }}" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        @foreach ($produk->carousels as $index => $carousel)
                                                            <li data-target="#carouselExampleIndicators{{ $loop->iteration }}" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                                        @endforeach
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        @foreach ($produk->carousels as $index => $carousel)
                                                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                <img class="d-block w-100" style="object-fit: contain" src="{{ asset($carousel->gambar) }}" alt="{{ $carousel->alt_text }}" style="height: 150px; object-fit: cover;">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators{{ $loop->iteration }}" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators{{ $loop->iteration }}" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</x-admin>
<script>
    $(document).ready( function () {
        $('#produkTable').DataTable();
    });

</script>
