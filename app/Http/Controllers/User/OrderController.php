<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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
        $request->validate([
            'total' => 'required',

        ]);
        // $rand_num = random_int(100000, 999999);
        $char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length = 8;
        $rand_string = '';

        for ($i = 0; $i < $length; $i++) {
            $rand_string .= $char[rand(0, strlen($char) - 1)];
        };

        $random = $rand_string;

        $previousUrl = url()->previous();
        $id_trim = Str::of($previousUrl)->afterLast('/')->__toString();
        $cek = Pesanan::where('user_id', auth()->user()->id)->where('product_id', $id_trim)->first();
        if ($cek) {
            $pesan = Pesanan::where('user_id', auth()->user()->id)->where('product_id', $id_trim)->first();
            $pesan->total = $pesan->total + $request->total;
            $pesan->save();
        } else {
            $pesan = Pesanan::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id_trim,
                'total' => $request->total,
                'order_number' => $random,
            ]);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Pesanan Berhasil Ditambahkan'
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $pesan)
    {
        //
    }
}
