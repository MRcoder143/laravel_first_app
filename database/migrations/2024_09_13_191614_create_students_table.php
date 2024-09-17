<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('stu_name',50);
            $table->string('stu_email',50)->unique()->nullable();
            // $table->primary('id');
            // $table->string('city',50)->default('no city');
            // $table->unsignedBigInteger('city_id');
            // $table->foreign('city_id')->references('id')->on('cities');
            // $table->string('city',50)->default('no city');
            // $table->string('email',20)->unique();
            // $table->string('age')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
