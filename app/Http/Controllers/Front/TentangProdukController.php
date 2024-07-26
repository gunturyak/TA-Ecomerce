<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class TentangProdukController extends Controller
{
    public function index()
    {

        return view('front.tentang-produk.index');
    }
}
