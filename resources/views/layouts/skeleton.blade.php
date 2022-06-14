<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Home') &mdash; {{ config('app.name') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{asset('image/logo_rokan_hilir.png')}}" rel="icon">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="{{asset('css/components.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/buttons.dataTables.min.css')}}">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"> --}}


  @stack('stylesheet')
</head>

<body>
<div id="app">
  @yield('app')
</div>
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> --}}
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/stisla.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script src="{{asset('js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('js/jszip.min.js')}}"></script>
<script src="{{asset('js/pdfmake.min.js')}}"></script>
<script src="{{asset('js/vfs_fonts.js')}}"></script>
<script src="{{asset('js/buttons.html5.min.js')}}"></script>
<script src="{{asset('js/buttons.print.min.js')}}"></script>






<script src="{{asset('js/iziToast.min.js')}}" type="text/javascript"></script>
<script>
    @if(Session::has('sukses'))
      // tampilkan toast sukses
      iziToast.success({
        title: 'Updated',
        message: 'Berhasil Update Surat',
      });
    @endif
    @if(Session::has('suksesDelete'))
      // tampilkan toast sukses
      iziToast.success({
        title: 'Deleted',
        message: 'Berhasil Delete Surat',
      });
    @endif
    @if(Session::has('tambahSKUH'))
      // tampilkan toast sukses
      iziToast.success({
        title: 'Surat Keterangan Usaha',
        message: 'Telah Berhasil Di Buat',
      });
    @endif
    @if(Session::has('tambahSKU'))
      // tampilkan toast sukses
      iziToast.success({
        title: 'Surat Keterangan Umum',
        message: 'Telah Berhasil Di Buat',
      });
    @endif
    @if(Session::has('fileEx'))
      // tampilkan toast sukses
      iziToast.error({
        title: 'Surat Keterangan Umum',
        message: 'Telah Berhasil Di Buat',
      });
    @endif

</script>
{{-- <script src="js/custom.js"></script> --}}
{{-- <script src="js/scripts.js"></script> --}}

@stack('javascript')
</body>
</html>
