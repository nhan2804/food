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
            $table->id('id_product')->autoIncrement();
            $table->string('name_prod');
            $table->string('shore_desc_prod');
            $table->text('desc_prod');
            $table->double('price_prod');
            $table->integer('discount_product');
            $table->integer('cate_1_id');
            $table->integer('cate_2_id');
            $table->integer('cate_3_id');
            $table->integer('user_id');
            $table->integer('brand_id');

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
        Schema::dropIfExists('product');
    }
}
