<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor')->nullable();
            $table->string('alamat_pelapor')->nullable();
            $table->string('email_pelapor')->nullable();
            $table->string('tlp_pelapor')->nullable();
            $table->integer('nama_pasien')->nullable();
            $table->string('kelamin_pasien')->nullable();
            $table->string('umur_pasien')->nullable();
            $table->string('alamat_pasien')->nullable();
            $table->string('email_pasien')->nullable();
            $table->string('tlp_pasien')->nullable();
            $table->string('nama_product')->nullable();
            $table->string('no_notifikasi')->nullable();
            $table->string('ukuran_kemasan')->nullable();
            $table->string('no_batch')->nullable();
            $table->string('bentuk_sediaan')->nullable();
            $table->string('produsen')->nullable();
            $table->string('distributor')->nullable();
            $table->date('tgl_kejadian')->nullable();
            $table->string('efek')->nullable();
            $table->string('foto')->nullable();
            $table->text('tindakan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduans');
    }
}
