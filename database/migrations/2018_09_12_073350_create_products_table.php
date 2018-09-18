<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            //$table->unsignedInteger('category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_price')->nullable();
            // $table->string('thumbnail')->nullable();
            $table->string('option')->nullable();
            $table->string('product_type')->nullable();
            $table->string('status')->nullable();
            

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
        Schema::dropIfExists('products');
    }
}
