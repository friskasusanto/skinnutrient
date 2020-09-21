<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('distributor_id')->nullable();
            $table->string('name')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('status')->default(0);
            $table->timestamps();

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
        Schema::dropIfExists('tokos');
    }
}
