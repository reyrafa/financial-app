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
        Schema::create("transactions", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("member_id");
            $table->foreign("member_id")->references("id")->on("members")->onDelete("restrict");
            $table->integer("loan_amount");
            $table->integer("annual_interest");
            $table->integer("loan_term_year");
            $table->integer("amortization_amount");
            $table->unsignedBigInteger("loan_status_id");
            $table->foreign("loan_status_id")->references("id")->on("loan_status")->onDelete("restrict");
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
        Schema::dropIfExists("transactions");
    }
};
