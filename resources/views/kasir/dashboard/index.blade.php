<x-app-layout title="Dashboard">
    @section('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/datatables.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/datatable-extension.css') }}">
    @endsection
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Pesanan</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Pesanan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>Daftar Pesanan</h5>
                        </div>
                        <div class="card-body">
                            <div class="dt-ext table-responsive">
                                <table class="display" id="export-button">
                                    <thead>
                                        <tr>
                                            <th>Nomor Pesanan</th>
                                            <th>Nama Pemesan</th>
                                            <th>Pesanan</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Detail Pesanan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pembelians as $pembelian)
                                            <tr>
                                                <td>{{ $pembelian->order_number }}</td>
                                                <td>{{ $pembelian->username }}</td>
                                                <td>
                                                    @foreach ($pembelian->pembelianItems as $item)
                                                        <p>{{ $item->produk->name }}</p>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{ route('kasir.download.gambar', ['id' => $pembelian->id]) }}"><i
                                                    class="icon-image mx-2"></i>{{ $pembelian->bukti_pembayaran }}</a>
                                                </td>
                                                <td> {{ \Carbon\Carbon::parse($pembelian->tanggal_pembelian)->format('Y-m-d') }}</td>
                                                <td>Rp. {{ number_format($pembelian->total_harga, 2, ',', '.') }}</td>
                                                <td>@if ($pembelian->status == 'Pending')
                                                    <span class="badge badge-secondary text-white">Pending</span>
                                                @elseif($pembelian->status == 'Diproses')
                                                    <span class="badge badge-info text-white">Diproses</span>
                                                @elseif($pembelian->status == 'Selesai')
                                                    <span class="badge badge-success text-white">Selesai</span>
                                                @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('kasir.pesanan.show', $pembelian->id) }}"
                                                    class="btn">
                                                    <i class="m-1" data-feather="eye"></i>
                                                     </a>
                                                </td>
                                                <td>
                                                    @if ($pembelian->status == 'Pending')
                                                        <a href="javascript:;" class="btn btn-info btn-sm"
                                                            onclick="handle_confirm('Apakah anda sedang menyiapkan pesanan ini?', 'Ya, benar', 'Tidak, belum', 'POST',
                                                            '{{ route('kasir.Diproses', ['id' => $pembelian->id]) }}')">
                                                            Diproses
                                                        </a>
                                                    @elseif($pembelian->status == 'Diproses')
                                                        <a href="javascript:;" class="btn btn-success btn-sm"
                                                            onclick="handle_confirm('Apakah anda pesanan ini telah selesai?', 'Ya, selesai', 'Tidak, belum', 'POST',
                                                            '{{ route('kasir.Selesai', ['id' => $pembelian->id]) }}')">
                                                            Selesai
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @section('script')
        <script src="{{ asset('assets/admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}">
        </script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}">
        </script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}">
        </script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}">
        </script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}">
        </script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}">
        </script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/datatable/datatable-extension/custom.js') }}"></script>
    @endsection
        </x-kasir-layout>
