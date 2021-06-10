<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Halaman Utama</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('image/Logo Kab-Kampar.png')}}" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('assets/eBusiness/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('assets/eBusiness/lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{asset('assets/eBusiness/lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{asset('assets/eBusiness/lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
  <link href="{{asset('assets/eBusiness/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/eBusiness/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/eBusiness/lib/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{asset('assets/eBusiness/css/nivo-slider-theme.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('assets/eBusiness/css/style.css')}}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{asset('assets/eBusiness/css/responsive.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <!-- Brand -->
                  {{-- <img src="{{asset('image/Logo Kab-Kampar.png')}}" alt="" title=""  width="50px"> --}}
                    <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                    <h1><span>S</span>IPES</h1>
                    </a>
                </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#alur">Persyaratan</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#persyaratan">Pengajuan Surat</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{route('admin')}}">Pegawai</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="{{asset('image/STRUKTUR PERANGKAT DESA.jpg')}}" alt="" title="#slider-direction-1" />
        <img src="{{asset('assets/eBusiness/img/slider/slider2.jpg')}}" alt="" title="#slider-direction-2" />
        <img src="{{asset('assets/eBusiness/img/slider/slider3.jpg')}}" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Business Of Helping You Start Your Business</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="alur" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Tentang SIPES</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="{{asset('image/STRUKTUR PERANGKAT DESA.jpg')}}" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">project Maintenance</h4>
              </a>
              <p>
                Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Interior design Package
                </li>
                <li>
                  <i class="fa fa-check"></i> Building House
                </li>
                <li>
                  <i class="fa fa-check"></i> Reparing of Residentail Roof
                </li>
                <li>
                  <i class="fa fa-check"></i> Renovaion of Commercial Office
                </li>
                <li>
                  <i class="fa fa-check"></i> Make Quality Products
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="persyaratan" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Persyaratan</h2>
          </div>
        </div>
      </div>
      <br>

      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-2"></div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pri_table_list active">
              <h3>Surat Keterangan Umum <br/></h3>
              <ol>
                  <li> <i class="fa fa-check"></i> Fhoto Copy Kartu Keluarga ( KK )</li>
                  <li> <i class="fa fa-check"></i> Fhoto Copy Kartu Tanda Penduduk ( KTP )</li>
                  <li> <i class="fa fa-check"></i> Surat Keterangan Domisili Dari RT/RW</li>
                  <li> <i class="fa fa-check"></i> Surat Pernyataan</li>
              </ol>
              <button>Ajukan Surat</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pri_table_list active">
              <h3>Surat Keterangan Usaha <br/></h3>
              <ol>
                <li> <i class="fa fa-check"></i> Fhoto Copy Kartu Keluarga ( KK )</li>
                <li> <i class="fa fa-check"></i> Fhoto Copy Kartu Tanda Penduduk ( KTP )</li>
                <li> <i class="fa fa-check"></i> Surat Keterangan Domisili Dari RT/RW</li>
                <li> <i class="fa fa-check"></i> Surat Keterangan Domisili Usaha Dari RT/RW Tempat Usaha</li>
                <li> <i class="fa fa-check"></i> Photo Usaha</li>
              </ol>
              <button>Ajukan Surat</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  {{-- <!-- start pricing area -->
  <div id="pricing" class="pricing-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Pricing Table</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="pri_table_list active">
            <h3>basic <br/> <span>$80 / month</span></h3>
            <ol>
                <img src="{{asset('assets/eBusiness/img/team/4.jpg')}}" alt="">
                <li class="check">Online system</li>
            </ol>
            <button>sign up now</button>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="pri_table_list active">
            <h3>standard <br/> <span>$110 / month</span></h3>
            <ol>
              <li class="check">Online system</li>
            </ol>
            <button>sign up now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End pricing table area --> --}}

  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('assets/eBusiness/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/eBusiness/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/eBusiness/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/eBusiness/lib/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/eBusiness/lib/knob/jquery.knob.js')}}"></script>
  <script src="{{asset('assets/eBusiness/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('assets/eBusiness/lib/parallax/parallax.js')}}"></script>
  <script src="{{asset('assets/eBusiness/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('assets/eBusiness/lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/eBusiness/lib/appear/jquery.appear.js')}}"></script>
  <script src="{{asset('assets/eBusiness/lib/isotope/isotope.pkgd.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('assets/eBusiness/contactform/contactform.js')}}"></script>

  <script src="{{asset('assets/eBusiness/js/main.js')}}"></script>
</body>

</html>
