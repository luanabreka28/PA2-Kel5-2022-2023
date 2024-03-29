<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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


        return redirect()->route('admin.galeri.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $pesan)
    {
        $detail_pesan = Produk::where('id', $pesan->id)->first();
        return view('web.pesan', compact('detail_pesan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $pesan)
    {
       
        $pesanan = Pesanan::where('product_id', $pesan->id)->where('user_id', Auth::user()->id)->first();
        $pesanan->delete();
        // Redirect ke halaman keranjang atau halaman lain yang diinginkan
        return redirect()->back()->with('success', 'Item keranjang berhasil dihapus.');
    }
}
