<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('dob');
            $table->string('nrc');
            $table->text('address');
            $table->integer('diocese_id');
            $table->integer('ethnicity_id');
            $table->string('father');
            $table->string('mother');
            $table->integer('role');
            $table->string('image')->nullable();

            $table->integer('parish_id')->nullable();
            $table->integer('position_1');
            $table->integer('position_2')->nullable();
            $table->integer('department_id');
            $table->string('spouse')->nullable();
            $table->text('childrens')->nullable();
            $table->text('education')->nullable();
            $table->string('deacon')->nullable();
            $table->string('priest')->nullable();
            $table->string('consecretion')->nullable();
            $table->text('remark')->nullable();

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
        Schema::dropIfExists('employees');
    }
}
