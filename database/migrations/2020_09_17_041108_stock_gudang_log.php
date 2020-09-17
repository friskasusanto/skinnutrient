<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StockGudangLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gudang_logs', function (Blueprint $table) {
            $table->string('stock_user')->after('stock')->nullable();
            $table->string('stock_distributor')->after('stock_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gudang_logs', function (Blueprint $table) {
            $table->dropColumn('stock_user');
            $table->dropColumn('stock_distributor');
        });
    }
}
