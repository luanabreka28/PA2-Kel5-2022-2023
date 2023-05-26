<?php

namespace App\Http\Controllers\User;

use App\Models\Pesanan;
use App\Models\Pembelian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function showStatus()
    {
        $pembelians = Pembelian::with('pembelianItems.produk')->where('user_id', Auth::user()->id)->get();
        return view('web.status', compact('pembelians'));
    }
}
