<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->string('address')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('courier')->nullable();
            $table->string('courier_paket')->nullable();
            $table->string('courier_resi')->nullable();
            $table->float('courier_price')->nullable();
            
            $table->float('total_amount')->nullable();
            $table->date('payment_date')->nullable();
            $table->string('status')->default(0);
            $table->string('bukti_pembayaran')->nullable();
            
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
