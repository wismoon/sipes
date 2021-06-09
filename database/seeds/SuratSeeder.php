<?php

use Illuminate\Database\Seeder;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surat')->insert([

            'tanggal' => '2021/05/29',
            'nomorsurat' => '/SK/TRB/III/2021',
            'nama' => 'Muhammad Wisnu Fauzi',
            'tempatlahir' => 'Madiun',
            'tanggallahir' => '1999/10/20',
            'jeniskelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'pekerjaan' => 'Mahasiswa',
            'alamat' => 'Jl.Saudara',
            'namausaha' => 'Kampung Durian',
            'alamatusaha' => 'Jl.Kampoeng',
            'jenis_surat' => 'surat keterangan umum',
            'keterangan' => 'Nama tersebut diatas saat ini Memiliki Usaha Kedai Harian yang terletak di Perum. Griya
                            Setia Nusa 3 Blok.D1 No.3 RT.01 RW.02 Dusun IV Tarab Mulia Desa Tarai Bangun ',
            'file_syarat' => 'Foto.pdf',
            'status' => 'diproses',
        ]);
    }
}
