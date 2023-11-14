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
        Schema::create("members", function (Blueprint $table) {
            $table->id();
            $table->string("fname"); 
            $table->string("mname");
            $table->string("lname");
            $table->string("full_name");
            $table->integer("age");
            $table->date("birth_date");
            $table->string("address");
            $table->string("email");
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
        Schema::dropIfExists("");
    }
};
