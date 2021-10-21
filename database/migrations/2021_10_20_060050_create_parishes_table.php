<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parishes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('service_time');
            $table->string('address');
            $table->integer('diocese_id');
            $table->integer('congeregation')->nullable();
            $table->integer('weekely_attendance')->nullable();
            $table->string('dedication')->nullable();
            $table->string('image')->nullable();
            $table->text('map')->nullable();
            $table->longText('history')->nullable();

            $table->integer('user_id')->default('1');
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
        Schema::dropIfExists('parishes');
    }
}
