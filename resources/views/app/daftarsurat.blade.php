@extends('layouts.app')

@section('title', 'Daftar Surat')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Daftar Surat</h1>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <article class="article">
            <div class="article-header">
              <div class="article-image" data-background="{{asset('image/SuratUmum.jpg')}}" >
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
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article">
              <div class="article-header">
                <div class="article-image" data-background="{{asset('image/SuratUsaha.jpg')}}">
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
@endsection
