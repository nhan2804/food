<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
            $table->id('id_brand')->autoIncrement();
            $table->string('thumb_brand');
            $table->string('name_brand');
            $table->string('desc_brand');
            $table->string('logo_brand');
            $table->string('status_brand');
            $table->string('primary_color_brand');
            $table->string('secondary_color_brand');
            $table->integer('user_id');
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
        Schema::dropIfExists('brand');
    }
}
