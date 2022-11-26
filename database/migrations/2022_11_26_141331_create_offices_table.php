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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id')->unsigned();
            $table->string('title');
            $table->string('address');
            $table->text('description')->nullable();
            $table->string('time_weekday');
            $table->string('time_saturday')->nullable();
            $table->string('time_sunday')->nullable();
            $table->timestamps();

            // создать внешний ключ (foreign key)
            // $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
};
