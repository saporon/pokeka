<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('value_ave_grade1')->nullable();
            $table->integer('value_ave_grade2')->nullable();
            $table->integer('value_ave_grade3')->nullable();
            $table->integer('value_max_grade1')->nullable();
            $table->integer('value_max_grade2')->nullable();
            $table->integer('value_max_grade3')->nullable();
            $table->integer('value_min_grade1')->nullable();
            $table->integer('value_min_grade2')->nullable();
            $table->integer('value_min_grade3')->nullable();
            $table->integer('difference_grade1')->nullable();
            $table->integer('difference_grade2')->nullable();
            $table->integer('difference_grade3')->nullable();
            $table->float('difference_per_grade1',6,2)->nullable();
            $table->float('difference_per_grade2',6,2)->nullable();
            $table->float('difference_per_grade3',6,2)->nullable();
            $table->string('image',1000)->nullable();
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
        Schema::dropIfExists('cards');
    }
}
