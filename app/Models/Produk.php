<?php

namespace App\Models;

use App\Models\ProdukCarousel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['nama_produk', 'harga_produk', 'stok_produk', 'deskripsi_produk', 'varian_produk', 'foto_produk'];

    public function carousels()
    {
        return $this->hasMany(ProdukCarousel::class, 'id_produk');
    }
    function handleUploadFoto()
    {

        $this->handleDelete();
        if (request()->hasFile('foto_produk')) {
            $foto_produk = request()->file('foto_produk');
            $destination = "images/Produk";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto_produk->extension();
            $url = $foto_produk->storeAs($destination, $filename);
            $this->foto_produk = "" . $url;
            $this->save();
        }
    }
    function handleDelete()
    {
        $foto_produk = $this->foto_produk;
        if ($foto_produk) {
            $path = public_path($foto_produk);
            if (file_exists($path)){
                unlink($path);
            }
        }
        return true;
    }
}
