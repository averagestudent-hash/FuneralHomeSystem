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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('userID');
            $table->string('fname');
            $table->string('lname');
            $table->string('age');
            $table->string('sex');
            $table->string('address');
            $table->string('contact');
            $table->string('idtype');
            $table->string('custimage');
            $table->string('custvalidid');
            $table->string('custgcashqr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
