@extends('layouts.skeleton')

@section('title', 'Halaman Utama')

@section('app')

<body class="layout-3">
      <div class="main-wrapper container">
        <div class="navbar-bg"></div>

        <nav class="navbar navbar-expand-lg main-navbar">
          <img href="#" src="{{asset('image/Logo Kab-Kampar.png')}}" class="navbar-brand sidebar-gone-hide" width="50px">
          <a class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars mt-4"></i></a>
          <div class="nav-collapse">
            <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
              <i class="fas fa-ellipsis-v"></i>
            </a>
            <ul class="navbar-nav">
              <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Persyaratan</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Blanko</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Ajukan Surat</a></li>
            </ul>
            <ul class="navbar-nav  ">
              <li class="nav-item right-auto">
                <a class="btn btn-primary nav-link" href="{{route('login')}}">Pegawai</a>
              </li>
            </ul>
          </div>
        </nav>

        <nav class="navbar navbar-secondary navbar-expand-lg">
          <div class="container">
            <ul class="navbar-nav text-left">
              <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Home</span></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Persyaratan</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="far fa-clone"></i><span>Blanko</span></a>
              </li>
            </ul>
          </div>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-header">
              <h1>TOP NAV</h1>
            </div>

            <div class="section-body text-left">
              <h2 class="section-title">Homepage</h2>
              <p class="section-lead"></p>
              <div class="card">
                <div class="card-header">
                  <h4>Home</h4>
                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos accusantium quod, maiores earum quasi debitis, veniam et dignissimos omnis vero, voluptatem fugit? Quos, quidem. Ipsam cumque placeat laborum fuga molestiae.</p>
                </div>
                <div class="card-footer bg-whitesmoke">
                </div>
              </div>
            </div>
            <div class="section-body text-left">
                <h2 class="section-title">Persyaratan</h2>
                <p class="section-lead"></p>
                <div class="row">
                  <div class="col-6 col-md-6 col-lg-3">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h4>Surat Keterangan Umum</h4>
                      </div>
                      <div class="card-body">
                        <p>Card <code>.card-danger</code></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-6 col-lg-3">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h4>Surat Keterangan Usaha</h4>
                      </div>
                      <div class="card-body">
                        <p>Card <code>.card-danger</code></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </section>
        </div>


          <div class="main-content">
            <section class="section">
                <div class="section-header">
                  <h1>Daftar Surat</h1>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                      <article class="article">
                        <div class="article-header">
                          <div class="article-image" data-background="{{asset('image/lol.PNG')}}">
                          </div>
                          <div class="article-title">
                            <h2><a href="#">Surat Keterangan Umum</a></h2>
                          </div>
                        </div>
                        <div class="article-details">
                          <p class="text-center">Surat Keterangan Umum Desa Tarai Bangun</p>
                          <div class="article-cta">
                            <a href="{{url('SuratKeterangan')}}" class="btn btn-primary">Pilih Surat</a>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                        <article class="article">
                          <div class="article-header">
                            <div class="article-image" data-background="{{asset('image/lol.PNG')}}">
                            </div>
                            <div class="article-title">
                              <h2><a href="#">Surat Keterangan Usaha</a></h2>
                            </div>
                          </div>
                          <div class="article-details">
                            <p class="text-center">Surat Keterangan Usaha Desa Tarai Bangun</p>
                            <div class="article-cta">
                              <a href="{{url('SuratKeteranganUsaha')}}" class="btn btn-primary">Pilih Surat</a>
                            </div>
                          </div>
                        </article>
                      </div>
                </div>
            </section>
          </div>

        <footer class="main-footer">
          <div class="footer-left">
            Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Wisnu</a>
          </div>
          <div class="footer-right">

          </div>
        </footer>
      </div>
</body>

@endsection
