<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\ProdukCarousel as ModelsProdukCarousel;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function index()
    {
        $data['list_produk'] = Produk::all();
        return view('Admin.Produk.index', $data);
    }
    public function data()
    {
        return view('Admin.Produk.data');
    }

    public function create()
    {
        return view('Admin.Produk.create');
    }

    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->nama_produk = $request->input('nama_produk');
        $produk->stok_produk = $request->input('stok_produk');
        $produk->varian_produk = $request->input('varian_produk');
        $produk->deskripsi_produk = $request->input('deskripsi_produk');
        $produk->harga_produk = $request->input('harga_produk');
        $produk->save();

        $id_produk = $produk->id;
        $produk = new ModelsProdukCarousel();
        $produk->handleUploadImage($id_produk);

        return redirect('Admin/Produk')->with('success', 'Data Berhasil di Tambahkan.');
    }

    public function show($produk)
    {
        $produk = Produk::find($produk);
        return view('Admin.Produk.Show', compact('produk'));
    }

    public function edit($produk)
    {
        $produk = Produk::find($produk);
        return view('Admin.Produk.edit', compact('produk'));
    }

    public function update(Request $request, string $id)
    {
        $produk = Produk::find($id);
        if (request('nama_produk')) $produk->nama_produk = request('nama_produk');
        if (request('deskripsi_produk')) $produk->deskripsi_produk = request('deskripsi_produk');
        if (request('varian_produk')) $produk->varian_produk = request('varian_produk');
        if (request('harga_produk')) $produk->harga_produk = request('harga_produk');
        if (request('stok_produk')) $produk->stok_produk = request('stok_produk');
        $produk->save();

        if (request('gambar'))
            $id_produk = $produk->id;
        $produk = new ModelsProdukCarousel();
        if(request ('handleUploadImage')) $produk->handleUploadImage($id_produk);

        return redirect('Admin/Produk')->with('success', 'Data Berhasil di Edit');
    }

    function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->handleDelete();
        $carousel = new ModelsProdukCarousel();
        $carousel->handleDeleteImage($produk->id);
        $produk->delete();
        return redirect('Admin/Produk')->with('danger', 'Data Berhasil Dihapus');
    }
}
