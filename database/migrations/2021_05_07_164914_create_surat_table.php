<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->nullable();
            $table->string('nomorsurat');
            $table->string('nama');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->string('jeniskelamin');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('namausaha')->nullable();
            $table->string('alamatusaha')->nullable();
            $table->string('keterangan')->nullable();
            $table->enum('jenis_surat',
            [
                'surat keterangan usaha',
                'surat keterangan umum'
                ]);
            $table->string('file_syarat');
            $table->enum('status',
            [
                'diproses',
                'selesai'
            ]);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat');
    }
}
