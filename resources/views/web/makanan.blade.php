<x-web-layout title="Paket Makanan">
    <main>
        <!-- banner-area-start -->
        <section class="banner-area pb-400 grey-bg pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="tpbanner__item mb-30">
                            <a href="#">
                                <div class="tpbanner__content" data-background="{{ asset('assets/img/banner/banner-1.jpg') }}">
                                    <span class="tpbanner__sub-title mb-10">Kualiats Makanan</span>
                                    <h4 class="tpbanner__title mb-30">Menggunakan Bahan <br> Makanan Yang Segar </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tpbanner__item mb-30">
                            <a href="#">
                                <div class="tpbanner__content" data-background="{{ asset('assets/img/banner/banner-2.jpg') }}">
                                    <span class="tpbanner__sub-title tpbanner__white mb-10">TOP Makanan</span>
                                    <h4 class="tpbanner__title mb-30">Banyak Pilihan <br> Menu Yang Terbaik</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tpbanner__item mb-30">
                            <a href="#">
                                <div class="tpbanner__content" data-background="{{ asset('assets/img/banner/banner-3.jpg') }}">
                                    <span class="tpbanner__sub-title mb-10">Top Seller</span>
                                    <h4 class="tpbanner__title mb-30">Memiliki Banyak Menu <br> Yang Diminati Konsumen
                                    </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area grey-bg pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-breadcrumb__content">
                            <div class="tp-breadcrumb__list">
                                <span class="tp-breadcrumb__active"><a href="index.html">Paket</a></span>
                                <span class="dvdr">/</span>
                                <span>Paket Makanan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- shop-area-start -->
        <section class="shop-area-start grey-bg pb-200">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="tpshop__details">
                            <div class="tpshop__category">

                            </div>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active whight-product" id="nav-popular" role="tabpanel"
                                    aria-labelledby="nav-popular-tab">
                                    <div
                                        class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                                        @foreach ($paket_makanan as $item)
                                            <div class="col">
                                                <div class="tpproduct p-relative mb-20">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('images/produk/' . $item->gambar) }}"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="{{ Route('pesan.show', $item->id) }}"><img
                                                                src="{{ asset('images/produk/' . $item->gambar) }}"
                                                                alt=""></a>

                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">{{ $item->name }}</a>
                                                        </h4>
                                                        <div class="tpproduct__price">
                                                            <span>Rp.
                                                                {{ number_format($item->harga, 2, ',', '.') }}</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-area-end -->
    </main>
</x-web-layout>
