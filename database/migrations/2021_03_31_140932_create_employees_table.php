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
            $table->increments('id');
            $table->string('name');
            $table->string('alamat');
            $table->string('phone');
            $table->string('email');
            $table->integer('position_id')->unsigned();
            $table->string('picture')->nullable();
            $table->timestamps();
            $table->softDeletes(); // softdelete
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('position_id')->references('id')
            ->on('positions');
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
