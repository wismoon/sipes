<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <style type="text/css">
<!--
        @page {margin: 0px;}
span.cls_002{font-family:Arial,serif;font-size:24.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_002{font-family:Arial,serif;font-size:24.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_003{font-family:Times,serif;font-size:24.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_003{font-family:Times,serif;font-size:24.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_004{font-family:Arial,serif;font-size:10.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_004{font-family:Arial,serif;font-size:10.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
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
<script type="text/javascript" src="165ce322-d187-11eb-a980-0cc47a792c0a_id_165ce322-d187-11eb-a980-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-306px;top:0px;width:612px;height:1008px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="{{asset('image/background2.jpg')}}" width=612 height=1008></div>
<div style="position:absolute;left:135.26px;top:26.88px" class="cls_002"><span class="cls_002">PEMERINTAH KABUPATEN KAMPAR</span></div>
<div style="position:absolute;left:207.29px;top:54.48px" class="cls_002"><span class="cls_002">KECAMATAN TAMBANG</span></div>
<div style="position:absolute;left:111.74px;top:81.98px" class="cls_003"><span class="cls_003">KANTOR KEPALA DESA TARAI BANGUN</span></div>
<div style="position:absolute;left:205.85px;top:110.54px" class="cls_004"><span class="cls_004">Alamat: Jl. Kubang Raya - Tarai Bangun Kabupaten Kampar</span></div>
<div style="position:absolute;left:214.01px;top:166.46px" class="cls_014"><span class="cls_014">SURAT KETERANGAN USAHA</span></div>
<div style="position:absolute;left:215.81px;top:186.38px" class="cls_009"><span class="cls_009">Nomor : {{$surat->nomorsurat}}</span></div>
<div class="ml-3 mr-4" style="position:absolute;left:57.74px;top:220.58px;text-align: justify; max-width:490px; line-height: 1.5;">
<p style="font-size: 14px">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kepala Desa Tarai Bangun Kecamatan Tambang Kabupaten Kampar dengan ini menerangkan bahwa :

</p>
</div>
<div style="position:absolute;left:97.62px;top:303.30px" class="cls_011"><span class="cls_011">Nama</span></div>
<div style="position:absolute;left:239.49px;top:303.30px" class="cls_011"><span class="cls_011">: </span><span class="cls_012">{{$surat->nama}}</span></div>
<div style="position:absolute;left:97.62px;top:325.77px" class="cls_011"><span class="cls_011">Tempat/Tanggal Lahir</span></div>
<div style="position:absolute;left:239.49px;top:325.77px" class="cls_011"><span class="cls_011">: {{$surat->tempatlahir}},
                                <?php
                                use Carbon\Carbon;
                                /* LL / D MMM Y */
                                echo Carbon::parse($surat->tanggallahir)->locale('id')->isoformat('LL');
                                ?>
                                </span>
</div>
<div style="position:absolute;left:97.62px;top:348.21px" class="cls_011"><span class="cls_011">Kewarganegaraan</span></div>
<div style="position:absolute;left:239.49px;top:348.21px" class="cls_011"><span class="cls_011">: Indonesia</span></div>
<div style="position:absolute;left:97.62px;top:370.65px" class="cls_011"><span class="cls_011">Jenis Kelamin</span></div>
<div style="position:absolute;left:239.49px;top:370.65px" class="cls_011"><span class="cls_011">: {{$surat->jeniskelamin}}</span></div>
<div style="position:absolute;left:97.62px;top:393.09px" class="cls_011"><span class="cls_011">Agama</span></div>
<div style="position:absolute;left:239.49px;top:393.09px" class="cls_011"><span class="cls_011">: {{$surat->agama}}</span></div>
<div style="position:absolute;left:97.62px;top:415.53px" class="cls_011"><span class="cls_011">Pekerjaan</span></div>
<div style="position:absolute;left:239.49px;top:415.53px" class="cls_011"><span class="cls_011">: {{$surat->pekerjaan}}</span></div>
<div style="position:absolute;left:97.62px;top:437.97px" class="cls_011"><span class="cls_011">Alamat</span></div>
<div style="position:absolute;left:239.49px;top:437.97px" class="cls_011"><span class="cls_011">: {{$surat->alamat}}</span></div>

<div class="cls_011 fulljustify" style="position:absolute;left:57.74px;top:460.85px;text-align: justify; max-width:490px; line-height: 1.5;">
<p style="font-size: 14px">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama tersebut diatas saat ini <span class="cls_012" style="text-transform: capitalize"> Memiliki Usaha {{$surat->namausaha}} </span> terletak di {{$surat->alamat}} <span style="text-transform: capitalize">{{$surat->alamatusaha}}</span> Dusun IV Tarab Mulia Desa Tarai Bangun Kecamatan Tambang Kabupaten Kamper dan surat ini diberikan guna Persyaratan Pengurusan {{$surat->pengurusan}}.
</p>
</div>

<div class="ml-3 mr-3" style="position:absolute;left:57.74px;top:560.71px;;text-align: justify; max-width:490px; line-height: 1.5;">
<p style="font-size: 14px">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana perlunya.
</p>
</div>
<div style="position:absolute;left:319.01px;top:670.99px" class="cls_007"><span class="cls_007">Dikeluarkan di</span></div>
<div style="position:absolute;left:442.03px;top:670.99px" class="cls_007"><span class="cls_007">: Tarai Bangun</span></div>
<div style="position:absolute;left:319.01px;top:691.75px" class="cls_007"><span class="cls_007">Pada Tanggal</span></div>
<div style="position:absolute;left:442.03px;top:691.75px" class="cls_007"><span class="cls_007">:
                                <?php
                                /* LL / D MMM Y */
                                echo Carbon::parse($surat->tanggal)->locale('id')->isoformat('LL');
                                ?>
                                </span>
</div>
<div style="position:absolute;left:319.01px;top:712.39px" class="cls_007"><span class="cls_007">KEPALA DESA TARAI BANGUN</span></div>
<div style="position:absolute;left:334.03px;top:798.58px" class="cls_015"><span class="cls_015">ANDRA MAISTAR, S.SOS</span></div>
</div>

</body>
</html>
