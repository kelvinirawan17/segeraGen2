@extends('layout/auth')

@section('page_title', 'Login')

@section('content')
    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
        <div class="page-content vertical-align-middle">
            <div class="panel">
                <div class="panel-body">
                    <div class="brand">
                        <img class="brand-img" src="{{ asset('images/logo-tuban.png') }}" width="100px" alt="Logo Tuban Kab">
                        <h2 class="brand-text font-size-18">Segera Gen2 Desa Rawasan</h2>
                    </div>
                    @csrf
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="text" class="form-control" name="username" />
                        <label class="floating-label">Username</label>
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="password" class="form-control" name="password" />
                        <label class="floating-label">Password</label>
                    </div>
                    <div class="form-group clearfix">
                        <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
                            <input type="checkbox" id="inputCheckbox" name="remember">
                            <label for="inputCheckbox">Remember me</label>
                        </div>
                        {{-- <a class="float-right" href="forgot-password.html">Forgot password?</a> --}}
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg mt-40" id="btnSign"
                        onclick="signIn()">Sign in</button>
                </div>
            </div>

            <footer class="page-copyright page-copyright-inverse">
                <p>WEBSITE BY IT DEV DESA RAWASAN</p>
                <p>© 2023. All RIGHT RESERVED.</p>
            </footer>
        </div>
    </div>
    <!-- End Page -->
@endsection

@push('script')
    <script>
        $(document).ready(function() {

        });

        function signIn() {
            var user = $('[name="username"]').val();
            var password = $('[name="password"]').val();
            var token = $("meta[name='csrf-token']").val();
            console.log(token);
            if (user.length == "") {
                toastr.warning('Username Kosong!', 'Alert !', '');
            } else if (password.length == "") {
                toastr.warning('Password Kosong!', 'Alert !', '');
            } else {
                $.ajax({
                    url: "{{ route('auth.login') }}",
                    type: "POST",
                    dataType: "JSON",
                    cache: false,
                    data: {
                        "username": user,
                        "password": password,
                        "_token": token
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Login Berhasil!', 'Berhasil !', '').then(function() {
                                window.location.href = "{{ route('dashboard') }}";
                            });

                        } else {
                            toastr.error('Password Salah, Silahkan Ulangi Lagi', 'Gagal !', '');
                        }

                    },
                    error: function(response) {
                        toastr.error(response, 'Gagal !', '');
                    }
                });
            }
        }
    </script>
@endpush
