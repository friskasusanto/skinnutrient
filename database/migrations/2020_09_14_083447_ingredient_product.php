<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IngredientProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('detail')->after('description')->nullable();
            $table->string('ingredients')->after('detail')->nullable();
            $table->string('how_to_use')->after('ingredients')->nullable();
            $table->string('shipping_police')->after('how_to_use')->nullable();
            $table->string('step')->after('shipping_police')->nullable();
            $table->string('composition')->after('step')->nullable();

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
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('detail');
            $table->dropColumn('ingredients');
            $table->dropColumn('how_to_use');
            $table->dropColumn('shipping_police');
            $table->dropColumn('step');
            $table->dropColumn('composition');
            $table->dropColumn('stock_user');
            $table->dropColumn('stock_distributor');
        });
    }
}
