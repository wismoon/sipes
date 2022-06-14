@extends('layouts.app2')

@section('content')
<body class="layout-2">
<section class="section">
    <div class="section-header">
      <h1>Ajukan Surat Keterangan Umum</h1>
    </div>
    <form action="{{route('surat.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                {{-- <x-input field="tanggal" label="Tanggal" type="date" aria-readonly="tanggal"/> --}}
                {{-- <x-inputR field="nomorsurat" label="Nomor Surat" type="text" value="   /SK/SKB/VI/2022"/> --}}
                <input type="hidden" value="   /SK/SKB/VI/2022/" name="nomorsurat">
                {{-- <input type="text" class="form-control" name="Nomor Surat" value="TES" placeholder="Nomor" readonly> --}}
                <x-input field="nama" label="Nama" type="text"/>
                <x-input field="tempatlahir" label="Tempat Lahir" type="text"/>
                <x-input field="tanggallahir" label="Tanggal Lahir" type="date"/>
                {{-- <x-input field="jeniskelamin" label="Jenis Kelamin" type="text"/> --}}
                <x-inputSelect field="jeniskelamin" label="Jenis Kealmin" type="select"/>
                <x-input field="agama" label="Agama" type="text"/>
                <a href="{{ url()->previous() }}" class="btn btn-warning" >Kembali</a>
            </div>
            <div class="col-md-4">
                <x-input field="pekerjaan" label="Pekerjaan" type="text"/>
                <x-input field="alamat" label="Alamat" type="text" placeholder="RT.03 RW.03 Kepenghuluan Sungai Kubu"/>
                <x-input field="nohp" label="No.Handphone" type="text"/>
                <x-inputSelectKet onchange="select(this.value)" field="keterangan" label="Keterangan" type="select"/>
                <div id="tes" class="md-1">
                    <x-input field="pengurusan" label="Syarat Mengurus" type="text" placeholder="Pendaftaran Sekolah..."/>
                </div>
                <div id="tes2">
                    <x-input field="ketSurat" label="Kegiatan" type="text"/>
                </div>
                <input type="hidden" value="surat keterangan umum" name="jenis_surat">
                {{-- <x-inputSelect field="jeniskelamin" label="Jenis Kelamin" type="select"/> --}}
                <x-inputFile field="thumbnail"/>
                <button type="submit" class="btn btn-primary float-right">Ajukan Surat</button>
            </div>
    </form>

</section>
</body>
@endsection
@push('javascript')

<script type="text/javascript">
    $(function(){
        $('#tes').hide();
        $('#tes2').hide();
        $('#keterangan').change(function(){
            if ($(this).val()=="sk.miskin") {
                $('#tes').show();
                $('#tes2').hide();
            }else
            {
                $('#tes2').show();
                $('#tes').hide();
            }
        });
    });

</script>
@endpush
