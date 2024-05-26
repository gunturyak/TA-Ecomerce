<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data ['list_produk'] = Produk::all();
        return view('Admin.Produk.index', $data);
    }
    public function data() {
        return view('Admin.Produk.data');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->nama_produk = $request->input('nama_produk');
        $produk->stok_produk = $request->input('stok_produk');
        $produk->varian_produk = $request->input('varian_produk');
        $produk->deskripsi_produk = $request->input('deskripsi_produk');
        $produk->harga_produk = $request->input('harga_produk');

        $produk->handleUploadFoto();
        $produk->save();

        return redirect('Admin/produk')->with('success', 'Data Berhasil di Tambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Produk $produk)
    {
        $produk->delete();

        return redirect('Admin/Dashboard')->with('danger', 'Data Berhasil Dihapus');
    }
}
