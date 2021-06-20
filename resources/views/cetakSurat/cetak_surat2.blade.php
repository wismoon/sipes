<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
<!--
@page {margin: 0px;}
span.cls_002{font-family:Arial,serif;font-size:22.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_002{font-family:Arial,serif;font-size:22.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_003{font-family:Times,serif;font-size:22.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_003{font-family:Times,serif;font-size:22.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_004{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_004{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_014{font-family:Times,serif;font-size:14.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: underline}
div.cls_014{font-family:Times,serif;font-size:14.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_009{font-family:Times,serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_009{font-family:Times,serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_011{font-family:Times,serif;font-size:13.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_011{font-family:Times,serif;font-size:13.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_012{font-family:Times,serif;font-size:13.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_012{font-family:Times,serif;font-size:13.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_007{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_007{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_015{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: underline}
div.cls_015{font-family:Times,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="7106dd38-c4b6-11eb-a980-0cc47a792c0a_id_7106dd38-c4b6-11eb-a980-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-306px;top:0px;width:612px;height:1008px;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="{{asset('image/background1.jpg')}}" width=612 height=1008></div>
<div style="position:absolute;left:160.10px;top:27.00px" class="cls_002"><span class="cls_002">PEMERINTAH KABUPATEN KAMPAR</span></div>
<div style="position:absolute;left:226.13px;top:52.32px" class="cls_002"><span class="cls_002">KECAMATAN TAMBANG</span></div>
<div style="position:absolute;left:138.62px;top:77.52px" class="cls_003"><span class="cls_003">KANTOR KEPALA DESA TARAI BANGUN</span></div>
<div style="position:absolute;left:198.65px;top:103.58px" class="cls_004"><span class="cls_004">Alamat: Jl. Kubang Raya - Tarai Bangun Kabupaten Kampar</span></div>
<div style="position:absolute;left:213.13px;top:140.70px" class="cls_014"><span class="cls_014">SURAT KETERANGAN USAHA</span></div>
<div style="position:absolute;left:228.93px;top:160.62px" class="cls_009"><span class="cls_009">Nomor : {{$surat->nomorsurat}}</span></div>
<div class="ml-3 mr-3" style="position:absolute;left:79.28px;top:190.58px;text-align: justify; max-width:475px;">
<p style="font-size: 14px">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kepala Desa Tarai Bangun Kecamatan Tambang Kabupaten Kampar dengan ini menerangkan bahwa :

</p>
</div>
<div style="position:absolute;left:107.62px;top:270.01px" class="cls_011"><span class="cls_011">Nama</span></div>
<div style="position:absolute;left:249.49px;top:270.01px" class="cls_011"><span class="cls_011">: </span><span class="cls_012">{{$surat->nama}}</span></div>
<div style="position:absolute;left:107.62px;top:292.45px" class="cls_011"><span class="cls_011">Tempat/Tanggal Lahir</span></div>
<div style="position:absolute;left:249.49px;top:292.45px" class="cls_011"><span class="cls_011" style="text-transform: capitalize">: {{$surat->tempatlahir}}, <?php
                                $date = new DateTime($surat->tanggallahir);
                                echo $date->format('d F Y')
                                ?></span></div>
<div style="position:absolute;left:107.62px;top:314.89px" class="cls_011"><span class="cls_011">Kewarganegaraan</span></div>
<div style="position:absolute;left:249.49px;top:314.89px" class="cls_011"><span class="cls_011">: Indonesia</span></div>
<div style="position:absolute;left:107.62px;top:337.33px" class="cls_011"><span class="cls_011">Jenis Kelamin</span></div>
<div style="position:absolute;left:249.49px;top:337.33px" class="cls_011"><span class="cls_011" style="text-transform: capitalize">: {{$surat->jeniskelamin}}</span></div>
<div style="position:absolute;left:107.62px;top:359.77px" class="cls_011"><span class="cls_011">Agama</span></div>
<div style="position:absolute;left:249.49px;top:359.77px" class="cls_011"><span class="cls_011" style="text-transform: capitalize">: {{$surat->agama}}</span></div>
<div style="position:absolute;left:107.62px;top:382.21px" class="cls_011"><span class="cls_011">Pekerjaan</span></div>
<div style="position:absolute;left:249.49px;top:382.21px" class="cls_011"><span class="cls_011" style="text-transform: capitalize">: {{$surat->pekerjaan}}</span></div>
<div style="position:absolute;left:107.62px;top:404.65px" class="cls_011"><span class="cls_011">Alamat</span></div>
<div style="position:absolute;left:249.49px;top:404.65px" class="cls_011"><span class="cls_011" style="text-transform: capitalize">: {{$surat->alamat}}</span></div>
<div class="" style="position:absolute;left:79.28px;top:440.85px;text-align: justify; max-width:475px;">
<p style="font-size: 14px">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama tersebut diatas saat ini <span class="cls_012" style="text-transform: capitalize"> Memiliki Usaha {{$surat->namausaha}} </span> terletak di <span style="text-transform: capitalize">{{$surat->alamatusaha}}</span> Dusun IV Tarab Mulia Desa Tarai Bangun Kecamatan Tambang Kabupaten Kamper dan surat ini diberikan guna Persyaratan Pengurusan Pengajuan Tambahan Modal Usaha
</p>
</div>
<div class="ml-3 mr-3" style="position:absolute;left:79.28px;top:520.71px;;text-align: justify; max-width:475px;">
<p style="font-size: 14px">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana perlunya.
</p>
</div>

<div style="position:absolute;left:319.01px;top:610.11px" class="cls_007"><span class="cls_007">Dikeluarkan di</span></div>
<div style="position:absolute;left:442.03px;top:610.11px" class="cls_007"><span class="cls_007">: Tarai Bangun</span></div>
<div style="position:absolute;left:319.01px;top:630.90px" class="cls_007"><span class="cls_007">Pada Tanggal</span></div>
<div style="position:absolute;left:442.03px;top:630.90px" class="cls_007"><span class="cls_007">: <?php
                                $date = new DateTime($surat->tanggal);
                                echo $date->format('d F Y')
                                ?></span></div>
<div style="position:absolute;left:319.01px;top:651.54px" class="cls_007"><span class="cls_007">KEPALA DESA TARAI BANGUN</span></div>
<div style="position:absolute;left:336.03px;top:737.70px" class="cls_015"><span class="cls_015">ANDRA MAISTAR, S.SOS</span></div>
</div>

</body>
</html>
