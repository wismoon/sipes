@extends('layouts.app')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Daftar Surat Keterangan Usaha</h1>
    </div>
    <form action="{{url('/SuratKeteranganUsaha')}}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- <x-input field="tanggal" label="Tanggal" type="date" aria-readonly="tanggal"/> --}}
        <x-inputR field="nomorsurat" label="Nomor Surat" type="text" value="   /SK/TRB/III/2021"/>
        {{-- <input type="text" class="form-control" name="Nomor Surat" value="TES" placeholder="Nomor" readonly> --}}
        <x-input field="nama" label="Nama" type="text"/>
        <x-input field="tempatlahir" label="Tempat Lahir" type="text"/>
        <x-input field="tanggallahir" label="Tanggal Lahir" type="date"/>
        <x-input field="jeniskelamin" label="Jenis Kelamin" type="text"/>
        <x-input field="agama" label="Agama" type="text"/>
        <x-input field="pekerjaan" label="Pekerjaan" type="text"/>
        <x-input field="alamat" label="Alamat" type="text"/>
        <x-input field="namausaha" label="Nama Usaha" type="text"/>
        <x-input field="alamatusaha" label="Alamat Usaha" type="text"/>
        {{-- <x-inputSelect field="jeniskelamin" label="Jenis Kelamin" type="select"/> --}}
        <x-inputFile />


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</section>
@endsection
