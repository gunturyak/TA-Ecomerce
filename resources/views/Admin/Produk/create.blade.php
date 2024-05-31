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
                                        <form action="{{ url('Admin/Produk') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="" class="control-label mt-3">NAMA PRODUK</label>
                                                    <input type="text" class="form-control" name="nama_produk" value="">
                                                    @error('nama_produk')
                                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="control-label mt-3">UPLOAD GAMBAR</label>
                                                    <input type="file" name="gambar[]" class="form-control mb-3" multiple>
                                                    @error('gambar')
                                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="control-label mt-3">VARIAN</label>
                                                    <input type="text" class="form-control" name="varian_produk" value="">
                                                    @error('varian_produk')
                                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="control-label mt-3">HARGA</label>
                                                    <input type="number" class="form-control" name="harga_produk" value="">
                                                    @error('harga_produk')
                                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="control-label mt-3">STOK</label>
                                                    <input type="number" class="form-control" name="stok_produk" value="">
                                                    @error('stok_produk')
                                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="" class="control-label mt-3">DESKRIPSI </label>
                                                    <textarea type="text" class="form-control" name="deskripsi_produk" id="summernote" cols="30" rows="6"></textarea>
                                                    @error('deskripsi_produk')
                                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                                    @enderror
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="btn-group float-right">
                                                    <button type="submit" class="btn-sm btn btn-primary"><i class="fas fa-save mr-2"></i>Simpan</button>
                                                    <button type="button" class="btn-sm btn btn-danger ml-2" onclick="window.location.href='{{ url('Admin/Produk') }}'"><i class="fa fa-trash mr-2"></i>Batal</button>
                                                </div>
                                            </div>                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin>