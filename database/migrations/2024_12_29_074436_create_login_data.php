<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('logindata', function (Blueprint $table) {
            $table->id(); // auto-incrementing ID
            $table->string('email')->unique(); // unique email
            $table->string('password'); // hashed password
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('logindata');
    }
};
