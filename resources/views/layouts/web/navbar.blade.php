<header>
    <div class="header__top theme-bg-1 d-none d-md-block">

    </div>
    <div id="header-sticky" class="header__main-area d-none d-xl-block">
        <div class="container">
            <div class="header__for-megamenu p-relative">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <div class="header__logo">
                            <a href="index.html"><img src="{{ asset('assets/img/logo/logo.jpeg') }}" alt="logo"
                                    width="250"></a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="header__menu main-menu text-center">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-homemenu">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#">Paket</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/paketmusik') }}">Paket Musik</a></li>
                                            <li><a href="{{ url('/paketmakanan') }}">Paket Makanan</a></li>
                                            <li><a href="{{ url('/paketdekorasi') }}">Paket Dekorasi</a></li>
                                            <li><a href="{{ url('/paketacara') }}">Paket Acara</a></li>
                                        </ul>
                                    </li>

                                    <li class=" has-homemenu">
                                        <a href="{{ url('galeri') }}">Galeri</a>
                                    </li>
                                    <li><a href="{{ url('about') }}">About Us</a></li>
                                    <li><a href="{{ url('user/testimoni') }}">Testimoni</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="header__info d-flex align-items-center">

                            @guest
                                <div class="header__info-user tpcolor__yellow ml-10">
                                    <a href="{{ url('login') }}"><i class="icon-user"></i></a>
                                </div>
                            @endguest
                            <?php
                            $banyak = \App\Models\Pesanan::join('produk', 'produk.id', '=', 'pesanan.product_id')
                                ->where('user_id', Auth::user()->id)
                                ->count();
                            ?>
                            <div class="header__info-cart tpcolor__oasis ml-10 tp-notif-toggle">
                                <a href="{{ route('status', Auth::user()->id) }}"><button><i
                                            class="icon-heart"></i></button></a>
                            </div>
                            <div class="header__info-cart tpcolor__oasis ml-10 tp-cart-toggle">
                                <button><i><img src="{{ asset('assets/img/icon/cart-1.svg') }}" alt=""></i>
                                    <span>{{ $banyak }}</span>
                                </button>
                            </div>
                            <div class="header__info-cart tpcolor__oasis ml-10">
                                @auth

                                    <a class="btn btn-outline-danger" href="{{ url('/do_logout') }}">Logout</a>

                                @endauth
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- header-cart-start -->
    <div class="tpcartinfo tp-cart-info-area p-relative">
        <button class="tpcart__close"><i class="icon-x"></i></button>
        <div class="tpcart">
            <?php
            $pesanan = \App\Models\Pesanan::join('produk', 'produk.id', '=', 'pesanan.product_id')
                ->where('user_id', Auth::user()->id)
                ->get();
            ?>
            <h4 class="tpcart__title">Pesanan </h4>
            <div class="tpcart__product">
                <div class="tpcart__product-list">
                    <ul>
                        <?php $subtotal = 0; ?>
                        @foreach ($pesanan as $key)
                            <li>
                                <div class="tpcart__item">
                                    <form action="{{ route('pesan.show', $key->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn">
                                            <i class="icon-x-circle"></i>
                                        </button>
                                    </form>
                                    <div class="tpcart__img">
                                        <img src="{{ asset('images/produk/' . $key->gambar) }}" alt="">
                                        <div class="tpcart__del">

                                        </div>

                                    </div>
                                    <div class="tpcart__content">
                                        <span class="tpcart__content-title"><a
                                                href="shop-details.html">{{ $key->name }} </a>
                                        </span>
                                        <div class="tpcart__cart-price">
                                            <span class="new-price">Rp {{ number_format($key->harga, 2) }}</span>
                                            <?php
                                            $hargatotal = $key->total * $key->harga;
                                            $subtotal += $hargatotal;
                                            ?>
                                            <span class="quantity">x {{ $key->total }} =
                                                {{ number_format($hargatotal, 2) }}</span>

                                        </div>

                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tpcart__checkout">
                    <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                        <span> Total:</span>
                        <span class="heilight-price"> Rp {{ number_format($subtotal, 2) }}</span>
                    </div>
                    <div class="tpcart__checkout-btn">
                        <a class="tpcart-btn mb-10" href="{{ route('pembayaran.show', Auth::user()->id) }}">Bayar
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cartbody-overlay"></div>
    <!-- header-cart-end -->



</header>
