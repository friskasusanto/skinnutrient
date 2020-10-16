<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanDistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_distributors', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('product_id')->nullable();
            $table->UnsignedBigInteger('distributor_id')->nullable();
            $table->string('jumlah_barang')->nullable();
            $table->string('harga_barang')->nullable();
            $table->string('total_harga')->nullable();
            $table->string('harga_dibayar')->nullable();
            $table->string('harga_belumDibayar')->nullable();
            $table->timestamp('tgl_tenggang')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('distributor_id')->references('id')->on('distributors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan_distributors');
    }
}
