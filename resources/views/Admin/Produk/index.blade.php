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
                                    <a href="{{ url('Admin/Produk/create') }}" class="btn btn-dark">Tambah
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
                                                {{-- <x-button.delete id="{{ $produk->id }}" /> --}}
                                                    <form action="{{ url('Admin/Produk', $produk->id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-tone"><i class="fas fa-trash"></i></button>
                                                    </form>
                                            </div>
                                        </td>
                                        <td>{{$produk->varian_produk}}</td>
                                        <td>{{$produk->stok_produk}}</td>
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
</script>
