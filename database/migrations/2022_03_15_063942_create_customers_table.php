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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("name");
            $table->string("mobile_no");
            $table->text("parmanent_address");
            $table->string("email");
            $table->string("vehicle_plate_no");
            $table->string("engine_number");
            $table->string("vehicle_color");
            $table->string("vehicle_type");
            $table->string("company_name");
            $table->string("model");
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
        Schema::dropIfExists('customers');
    }
};
