<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class DataProdukController extends Controller
{
    function index(){
        $data ['list_produk'] = Produk::all();
        return view('Admin.DataProduk.index', $data);
    }
}
