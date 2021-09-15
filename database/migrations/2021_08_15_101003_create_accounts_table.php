<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FirstName')->default(null);
            $table->string('LastName')->default(null);
            $table->string('Email')->default(null);
            $table->string('PhoneNumber')->default(null);
            $table->text('PasswordHash')->default(null);
            $table->string('Avatar')->default('https://res.cloudinary.com/thangdao04/image/upload/v1631744817/mgez61yb53k6cjlvzkxt.png');
            $table->string('Salt')->default(null);
            $table->integer('Age')->default(null);
            $table->integer('Role')->default(null);
            $table->integer('Status')->default(2);
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
        Schema::dropIfExists('accounts');
    }
}
