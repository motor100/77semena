<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('title')->index();
            $table->string('slug')->unique();
            $table->integer('category_id');
            $table->string('image');
            $table->text('text');
            $table->biginteger('code')->unique();
            $table->biginteger('stock');
            $table->integer('buying_price');
            $table->integer('wholesale_price');
            $table->integer('retail_price');
            $table->integer('promo_price')->nullable();
            $table->integer('weight')->nullable();
            $table->string('brand')->nullable();
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
};
