<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('it_name')->nullable();
            $table->string('it_barcode')->nullable();
            $table->integer('itpc_id')->unsigned()->index()->nullable();
            $table->foreign('itpc_id')->references('id')->on('categories');
            $table->integer('itsub_id')->unsigned()->index()->nullable();
            $table->foreign('itsub_id')->references('id')->on('categories');
            $table->string('it_descrip')->nullable();
            $table->string('it_image')->nullable();
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
        Schema::dropIfExists('items');
    }
}
