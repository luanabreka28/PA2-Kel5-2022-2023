<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
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

        $today = Carbon::today();
        $startOfWeek = $today->startOfWeek()->format('Y-m-d');
        $endOfWeek = $today->endOfWeek()->format('Y-m-d');

        $data_selesai = Pembelian::whereBetween('created_at', [$startOfWeek, $endOfWeek])
            ->get()
            ->groupBy(function ($item) {
                return $item->created_at->format('Y-m-d');
            })
            ->map(function ($pembelians) {
                return $pembelians->count();
            });

        // dd($data_selesai);

        return view('admin.dashboard.index', compact('total_pending', 'total_selesai', 'total_diproses', 'total_semua', 'data_selesai'));
    }
}
