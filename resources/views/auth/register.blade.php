<x-auth-layout title="Registrasi">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center"
                    src="{{ asset('assets/admin/assets/images/login/1.jpg') }}" alt="looginpage"></div>
            <div class="col-xl-5 p-0">
                <div class="login-card">
                    <form class="theme-form login-form" method="post" action="{{ url('/do_register') }}">
                        @csrf
                        <h4>Registrasi</h4>
                        <h6>Silahkan buat akun anda</h6>
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                                <input class="form-control @error('name')is-invalid @enderror" type="text"
                                    name="name" id="name" placeholder="Nama Lengkap" autofocus>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                                <input class="form-control @error('email')is-invalid @enderror" type="email"
                                    id="email" name="email" placeholder="Masukkan email anda">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nohp">Nomor Telepon</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-phone"></i></span>
                                <input class="form-control @error('nohp')is-invalid @enderror" type="number"
                                    id="nohp" name="nohp" placeholder="628xxxxxxxxxx">
                                @error('nohp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                <input class="form-control @error('password')is-invalid @enderror" type="password"
                                    id="password" name="password" name="" placeholder="*********">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="show-hide"><span class="show"> </span></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Daftar</button>
                        </div>


                        <p>Sudah punya akun?<a class="ms-2" href="{{ url('/login') }}">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
</x-auth-layout>
