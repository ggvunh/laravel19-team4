<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPromotionIdOnBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->integer('promotion_id')->unsigned()->nullable();
            $table->foreign('promotion_id')->references('id')->on('promotions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign('bookings_promotion_id_foreign');
            $table->dropColumn('promotion_id');
        });
    }
}
