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
            $table->string('words_vi');
            $table->string('words_en');
            $table->string('voice_vi');
            $table->string('voice_en');
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
