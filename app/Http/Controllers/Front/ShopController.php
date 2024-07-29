<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $data['list_produk'] = Produk::with('carousels')->get();
        return view('Front.Shop.index', $data);
    }
    
    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->stok_produk = $request->stok_produk;
        $produk->deskripsi_produk = $request->deskripsi_produk;
        $produk->varian_produk = $request->varian_produk;
        $produk->handleUploadFoto();
        $produk->save();

        // Mengarahkan ke halaman ChartController untuk menambahkan produk ke keranjang
        return redirect()->route('chart.addToCart', ['id' => $produk->id])
            ->with('success', 'Produk berhasil ditambahkan dan siap ditambahkan ke keranjang!');
    }

    /**
     * Display the specified resource.
     */
    public function show($variant)
    {
        $produk = Produk::where('varian_produk', $variant)->first();
        if (!$produk) {
            return view('front.Error.404');
        }

        return view('front.shop.detail', compact('produk'));
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
    public function destroy(string $id)
    {
        //
    }
}
