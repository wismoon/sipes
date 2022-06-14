@extends('layouts.app')

@section('title', 'Admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    Selamat Datang di Sistem Pelayanan Pengajuan Surat Desa Sungai Kubu.
                </div>

            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-success">
                <i class="far fas fa-envelope"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Surat Selesai</h4>
                </div>
                <div class="card-body">
                  {{$selesai}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fas fa-envelope"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Surat DiProses</h4>
                  </div>
                  <div class="card-body">
                    {{$diproses}}
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
@endsection
