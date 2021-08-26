<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_supports', function (Blueprint $table) {
            $table->id();
            $table->string('values');
            $table->string('words');
            $table->string('color')->default('white');
            $table->string('video')->default('null');
            $table->string('voice');
            $table->string('images');
            $table->string('key');
            $table->string('createBy');
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
        Schema::dropIfExists('data_supports');
    }
}
