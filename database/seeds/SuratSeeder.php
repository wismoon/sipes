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
            'nohp' => '08224993123',
            'namausaha' => 'Kampung Durian',
            'alamatusaha' => 'Jl.Kampoeng',
            'jenis_surat' => 'surat keterangan umum',
            'keterangan' => '',
            'file_syarat' => 'Foto.pdf',
            'status' => 'diproses',
        ]);
    }
}
