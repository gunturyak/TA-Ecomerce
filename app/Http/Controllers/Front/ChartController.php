<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function addToCart(Request $request)
    {
        $produkId = $request->input('id');

        // Logika untuk menambahkan produk ke keranjang, misalnya menggunakan sesi atau tabel database
        $cart = session()->get('cart', []);

        if (isset($cart[$produkId])) {
            $cart[$produkId]['quantity']++;
        } else {
            $product = Produk::find($produkId);
            $cart[$produkId] = [
                "name" => $product->nama_produk,
                "price" => $product->harga_produk,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Front.Keranjang.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
