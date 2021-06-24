@extends('layouts.app2')

@section('content')
<body class="layout-2">
<section class="section">
    <div class="section-header">
      <h1>Ajukan Surat Keterangan Usaha</h1>
    </div>
    <form action="{{route('surat.storeU')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
                {{-- <x-input field="tanggal" label="Tanggal" type="date" aria-readonly="tanggal"/> --}}
                {{-- <x-inputR field="nomorsurat" label="Nomor Surat" type="text" value="   /SK/TRB/III/2021"/> --}}
                <input type="hidden" value="   /SK/TRB/III/2021/" name="nomorsurat">
                {{-- <input type="text" class="form-control" name="Nomor Surat" value="TES" placeholder="Nomor" readonly> --}}
                <x-input field="nama" label="Nama" type="text"/>
                <x-input field="tempatlahir" label="Tempat Lahir" type="text"/>
                <x-input field="tanggallahir" label="Tanggal Lahir" type="date"/>
                <x-inputSelect field="jeniskelamin" label="Jenis Kelamin" type="select"/>
                <x-input field="agama" label="Agama" type="text"/>
                <x-input field="pekerjaan" label="Pekerjaan" type="text"/>
                <button type="submit" class="btn btn-primary">Ajukan Surat</button>
        </div>
        <div class="col-md-4">
                <x-input field="alamat" label="Alamat" type="text"/>
                <x-input field="nohp" label="No.Handphone" type="text"/>
                <x-input field="namausaha" label="Nama Usaha" type="text"/>
                <x-input field="alamatusaha" label="Alamat Usaha Lengkap" type="text" placeholder="RT.03 RW.03 Dusun II Tarab Mandiri"/>
                <x-input field="pengurusan" label="Syarat Pengurusan" type="text" placeholder="Pengajuan Modal Tambahan Usaha.."/>
                <input type="hidden" value="sk.usaha" name="keterangan">
                <input type="hidden" value="surat keterangan usaha" name="jenis_surat">
                {{-- <x-inputSelect field="jeniskelamin" label="Jenis Kelamin" type="select"/> --}}
                <x-inputFile field="thumbnail" />
        </div>
    </div>
</form>

</section>
</body>
@endsection
