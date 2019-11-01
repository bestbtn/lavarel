<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_comments', function (Blueprint $table) {
            $table->increments('com_id');
            $table->string('com_name');
            $table->string('com_email');
            $table->string('com_content');
            $table->integer('com_product')->unsigned();
            $table->foreign('com_product')
                        ->references('pro_id')
                        ->on('vp_products')
                         ->onDelete('cascade');

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
        Schema::dropIfExists('vp_comments');
    }
}
