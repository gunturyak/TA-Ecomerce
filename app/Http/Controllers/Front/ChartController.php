<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = Produk::find($request->id);
        $quantity = $request->quantity;

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantity;
        } else {
            $cart[$product->id] = [
                "name" => $product->varian_produk,
                "quantity" => $quantity,
                "price" => $product->harga_produk,
                "image" => $product->carousels->first()->gambar
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', 'Product added to cart successfully!');
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        $subtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        $shipping = 2500; // Contoh biaya pengiriman flat rate
        $total = $subtotal + $shipping;

        return view('Front.Keranjang.index', compact('cart', 'subtotal', 'total'));
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed successfully!');
    }
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
