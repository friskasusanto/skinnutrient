<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmailDistributor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('distributors', function (Blueprint $table) {
            $table->string('email')->unique();
            $table->string('phone')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('distributors', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('phone');
        });
    }
}
