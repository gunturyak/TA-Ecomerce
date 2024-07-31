<x-admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Produk</li>
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
                                    <h3 class="card-title">Produk</h3>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ url('Admin/Produk/create') }}" class="btn btn-sm btn-dark">Tambah
                                        Produk</a>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Varian Produk</th>
                                    <th>Stok</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_produk as $produk)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('Admin/Produk', $produk->id) }}" class="btn btn-dark btn-sm"><i class="fa fa-info"></i></a>
                                                <a href="{{ url('Admin/Produk/' . $produk->id . '/edit') }}" class="btn btn-warning btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ url('Admin/Produk', $produk->id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-tone"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{$produk->varian_produk}}</td>
                                        <td> <span data-url="{{ url('Admin/Produk', $produk->id) }}" id="stokProduk_{{ $produk->id }}" data-original-value="{{ $produk->stok_produk }}">{{ $produk->stok_produk }}</span>
                                            <a onclick="editStokProduk({{ $produk->id }})"><i class="fa fa-edit btn-xs" style="float: right; "></i></a>
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
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    function editStokProduk(produkId) {
        var spanStokProduk = document.getElementById('stokProduk_' + produkId);
        var currentStokProduk = spanStokProduk.textContent;
        var actionUrl = spanStokProduk.dataset.url;

        var formHTML = `
        <form action="${actionUrl}" method="post">
            @csrf
            @method('PUT')
            <input type="number" class="form-control" name="stok_produk" value="${currentStokProduk}">
            <br>
            <div class="button-group pull-right">
                <a href="#" class="btn btn-sm btn-outline-danger mt-1" onclick="cancelEditStokProduk(event, ${produkId})">Batal</a>
                <button class="btn btn-sm btn-outline-success mt-1" type="submit"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    `;

        spanStokProduk.innerHTML = formHTML;

        // Hilangkan tombol edit saat form muncul
        var editLink = spanStokProduk.nextElementSibling;
        if (editLink) {
            editLink.style.display = 'none';
        }
    }

    function cancelEditStokProduk(event, produkId) {
        event.preventDefault();

        var spanStokProduk = document.getElementById('stokProduk_' + produkId);
        var originalValue = spanStokProduk.dataset.originalValue;

        spanStokProduk.innerHTML = originalValue;

        // Tambahkan kembali tombol Edit
        var editLink = spanStokProduk.nextElementSibling;
        if (editLink) {
            editLink.style.display = 'inline';
        }
    }
</script>