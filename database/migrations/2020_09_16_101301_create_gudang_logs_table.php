<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGudangLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gudang_logs', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('product_id')->nullable();
            $table->string('stock')->default(0)->nullable();
            $table->string('keluar')->nullable();
            $table->string('masuk')->nullable();
            $table->string('status')->default(0)->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gudang_logs');
    }
}
