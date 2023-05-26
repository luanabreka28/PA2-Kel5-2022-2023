<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $total_pending = Pembelian::where('status', 'Pending')->count();
        $total_selesai = Pembelian::where('status', 'Selesai')->count();
        $total_diproses = Pembelian::where('status', 'Diproses')->count();
        $total_semua = $total_pending + $total_selesai + $total_diproses;

        return view('admin.dashboard.index', compact('total_pending', 'total_selesai', 'total_diproses', 'total_semua'));
    }
}
