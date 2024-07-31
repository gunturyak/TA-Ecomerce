<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data ['list_produk'] = Produk::all();
        return view('Front.Home.index', $data);
    }

}
