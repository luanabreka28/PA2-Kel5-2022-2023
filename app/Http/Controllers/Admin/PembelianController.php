<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pesanan;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembelianController extends Controller
{
    public function showPembelian()
    {
        $pembelians = Pembelian::with('pembelianItems.produk')->get();
        $produk = Pesanan::get();
        return view('admin.pemasukkan.index', compact('pembelians', 'produk'));
    }

    public function show($id)
    {
        $pembelian = Pembelian::with('pembelianItems.produk')->find($id);

        if ($pembelian) {
            return view('admin.pemasukkan.show', compact('pembelian'));
        }
    }
}
