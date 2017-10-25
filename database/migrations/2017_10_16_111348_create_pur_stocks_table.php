<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pur_stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_id')->unsigned()->index()->nullable();
            $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->integer('item_id')->unsigned()->index()->nullable();
            $table->foreign('item_id')->references('id')->on('items');
            $table->string('quantity')->nullable();
            $table->string('u_price')->nullable();
            $table->string('s_total')->nullable();
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
        Schema::dropIfExists('pur_stocks');
    }
}
