<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity');
            $table->string('image');
            $table->integer('status');
            $table->string('price');
            $table->timestamps();
        });

        Schema::create('product_description', function (Blueprint $table) {
            $table->id('product_id');
            // $table->string('product_id');
            $table->mediumText('description');
            $table->string('name');
            $table->string('meta_title');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');

        Schema::dropIfExists('product_description');
    }
}
