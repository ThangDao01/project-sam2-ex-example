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
            $table->string('values')->default(null);
            $table->string('words')->default(null);
            $table->string('color')->default('white');
            $table->string('video')->default('null');
            $table->string('voice')->default(null);
            $table->string('images')->default(null);
            $table->string('key')->default(null);
            $table->string('createBy')->default(null);
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
