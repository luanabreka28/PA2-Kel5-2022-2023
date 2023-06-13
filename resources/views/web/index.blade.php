<x-web-layout title="Home Gaol Production">
    </div>
    <main>
        <section class="slider-area tpslider__home-3 tpslider-delay grey-bg slider-three">
            <div class="swiper-container slider-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tpslider grey-bg">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-7 mt-140">
                                        <div class="tpslider__content slider-three-content text-center">
                                            <h2 class="tpslider__title mb-25">Selamat Datang di <br> Gaol Production</h2>
                                            <p>Gaol Production akan membantu anda dalam <br> menyiapkan keperluhan acara
                                                anda</p>
                                            <div class="tpslider__btn">
                                                <a class="tp-btn" href="#">Pesan Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-5">
                                        <div class="tpslider__thumb p-relative">
                                            <img class="tpslider__thumb-img tpslider__three"
                                                src="{{ asset('assets/img/slider/slider-bg-6.png') }}" alt="slider-bg">
                                            <div class="tpslider__shape d-none d-lg-block">
                                                <img class="tpslider__shape-three three-shap-one"
                                                    src="{{ asset('assets/img/slider/slider-shape-5.png') }}" alt="shape">
                                                <img class=" three-shap-two" src="{{ asset('assets/img/slider/slider-shape-6.png') }}"
                                                    alt="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-coundown-area-end -->

        <!-- about-area-start -->
        <section class="about-area pt-55">
            <div class="container">
                <div class="tpabout__border pb-35">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="tpabout__item text-center mb-40">
                                <div class="tpabout__icon mb-15">
                                    <img src="{{ asset('assets/img/icon/o.png') }}" alt="">
                                </div>
                                <div class="tpabout__content">
                                    <h4 class="tpabout__title">Tanpa Berlangganan</h4>
                                    <p>Tanpa kontrak langganan, <br> bisa pesan sesuai kebutuhan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="tpabout__item text-center mb-40">
                                <div class="tpabout__icon mb-15">
                                    <img src="{{ asset('assets/img/icon/order.png') }}" alt="">
                                </div>
                                <div class="tpabout__content">
                                    <h4 class="tpabout__title">Bebas Memilih Menu </h4>
                                    <p>Terdapat lebih dari 30 pilihan menu, <br> bebas memilih menu.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="tpabout__item text-center mb-40">
                                <div class="tpabout__icon mb-15">
                                    <img src="{{ asset('assets/img/icon/time.png') }}" alt="">
                                </div>
                                <div class="tpabout__content">
                                    <h4 class="tpabout__title">Bebas Memilih Waktu </h4>
                                    <p>Waktu pengantaran fleksibel, <br> disesuaikan dengan kebutuhan anda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- brand-product-area-start -->
        <section class="brand-product pt-75 pb-60">
            <div class="container">
                <div class="white-bg pb-40 brand-product">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="tpsection mb-35">
                                <h4 class="tpsection__title">Menu Terpopuler</h4>
                                <p>Daftar menu terpopuler dikalangan konsumen saat ini</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                        @foreach ($paket_makanan as $item)
                            <div class="col">
                                <div class="tpproduct p-relative mb-20">
                                    <div class="tpproduct__thumb p-relative text-center">
                                        <a href=""><img src="{{ asset('images/produk/' . $item->gambar) }}"
                                                alt=""></a>
                                        <a class="tpproduct__thumb-img" href="{{ Route('pesan.show', $item->id) }}"><img
                                                src="{{ asset('images/produk/' . $item->gambar) }}" alt=""></a>

                                    </div>
                                    <div class="tpproduct__content">
                                        <h4 class="tpproduct__title">
                                            <a href="shop-details-top-.html">{{ $item->name }}</a>
                                        </h4>
                                        <div class="tpproduct__price">
                                            <span>Rp. {{ number_format($item->harga, 2, ',', '.') }}</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
        </section>
        <!-- brand-product-area-end -->

        <!--Start Kemasan-->
        <section class="slider-area tpslider-delay">
            <div class="swiper-container slider-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="tpslider pt-50 pb-0 grey-bg" data-background="{{ asset('assets/img/slider/shape-bg.jpg') }}">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xxl-5 col-lg-6 col-md-6 col-12 col-sm-6">
                                        <div class="tpslider__content pt-10 ml-100">
                                            <h2 class="tpslider__title mb-30">Kemasan Paket Catering</h2>
                                            <p>Kemasan yang praktis, bersih dan juga sehat, <br> kemasan yang akan
                                                melindungi makanan dengan aman</p>

                                        </div>
                                    </div>
                                    <div class="col-xxl-7 col-lg-6 col-md-6 col-12 col-sm-6">
                                        <div class="tpslider__thumb p-relative pt-15">
                                            <img class="tpslider__thumb-img" src="{{ asset('assets/img/slider/kemasan.png') }}"
                                                alt="slider-bg">
                                            <div class="tpslider__shape d-none d-md-block">
                                                <img class="tpslider__shape-one"
                                                    src="{{ asset('assets/img/slider/slider-shape-1.png') }}" alt="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--End Kemasana-->

        <!-- banner-area-start -->
        <section class="banner-area pb-35 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="tpbanner__wraper mb-20">
                            <div class="tpbanner__thumb">
                                <a href="shop-3.html">
                                    <div class="tpbanner__big-text tpbanner__big-bg"
                                        data-background="{{ asset('assets/img/banner/banner-12.jpg') }}">
                                        <div class="tpbanner__big-bg-content">
                                            <h4 class="tpbanner__title mb-15">Paket <br> Catering</h4>
                                            <p>Makanan rumahan, hemat, enak, bersih.</p>
                                            <div class="tpbanner__btn">
                                                <a class="whight-btn" href="{{ url('/paketmakanan') }}">Pesan
                                                    Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="tpbanner__thumb mb-20">
                                    <a href="{{ url('/paketdekorasi') }}">
                                        <div class="tpbanner__text tpbanner__bg3"
                                            data-background="{{ asset('assets/img/banner/banner-11.jpg') }}">
                                            <div class="tpbanner__bg__second-content">
                                                <h4 class="tpbanner__title mb-15">Paket <br> Dekorasi</h4>
                                                <p>Menyediakan dekorasi untuk berbagai acara</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-3">
                            <div class="col-lg-6 col-md-6">
                                <div class="tpbanner__thumb mb-20">
                                    <a href="{{ url('/paketmusik') }}">
                                        <div class="tpbanner__text tpbanner__bg4"
                                            data-background="{{ asset('assets/img/banner/banner-10.jpg') }}">
                                            <h4 class="tpbanner__title mb-20">Paket <br> Musik Dan Band</h4>
                                            <p>Menyediakan sewa jasa musik dan band</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="tpbanner__thumb mb-20">
                                    <a href="{{ url('/paketacara') }}">
                                        <div class="tpbanner__text tpbanner__bg4"
                                            data-background="{{ asset('assets/img/banner/banner-13.jpg') }}">
                                            <h4 class="tpbanner__title mb-20">Paket <br> Acara</h4>
                                            <p>Menyediakan paket berbagai acara</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->
    </main>
</x-web-layout>
