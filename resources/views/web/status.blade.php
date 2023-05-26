<x-web-layout title="Status Pesanan">
    <main>
        <div class="breadcrumb__area pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-breadcrumb__content">
                            <div class="tp-breadcrumb__list">
                                <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                                <span class="dvdr">/</span>
                                <span>Status Pesanan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-area pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-quantity">No. Pesanan</th>
                                            <th class="product-thumbnail">Gambar</th>
                                            <th class="cart-product-name">Nama Produk</th>
                                            <th class="product-price">Jumlah</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-add-to-cart">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pembelians as $pembelian)
                                            <tr>
                                                <td>
                                                    {{ $pembelian->order_number }}
                                                </td>
                                                <td>
                                                    @foreach ($pembelian->pembelianItems as $item)
                                                        <img src="{{ asset('images/produk/' . $item->produk->gambar) }}"
                                                            alt="" width="100">
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($pembelian->pembelianItems as $item)
                                                        <p>{{ $item->produk->name }}</p>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($pembelian->pembelianItems as $item)
                                                        <p>{{ $item->jumlah }}</p>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    Rp. {{ number_format($pembelian->total_harga, 2, ',', '.') }}
                                                </td>
                                                <td>
                                                    {{ $pembelian->status }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-web-layout>
