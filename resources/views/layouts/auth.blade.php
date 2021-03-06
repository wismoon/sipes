<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; {{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link href="{{asset('image/logo_rokan_hilir.png')}}" rel="icon">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{ asset('image/logo_rokan_hilir.png') }}" alt="logo" width="120" class="">
            </div>
            @if(session()->has('info'))
            <div class="alert alert-primary">
                {{ session()->get('info') }}
            </div>
            @endif
            @if(session()->has('status'))
            <div class="alert alert-info">
                {{ session()->get('status') }}
            </div>
            @endif
            @yield('content')
            <div class="simple-footer">
              Copyright &copy; Gusrian Hidayat {{ date('Y') }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="{{ mix('js/manifest.js') }}"></script>
  <script src="{{ mix('js/vendor.js') }}"></script>
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{asset('js/iziToast.min.js')}}" type="text/javascript"></script>
  <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
  <script>
    @if(Session::has('error'))
      // tampilkan toast sukses
      iziToast.error({
        position: 'topCenter',
        title: 'Login Gagal',
        message: 'Masukkan email dan password yang benar',
      });
    @endif
</script>
</body>

</html>
