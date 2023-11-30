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
        Schema::create('deceaseds', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('customerID');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('relationship');
            $table->string('causeofdeath');
            $table->string('sex');
            $table->string('religion');
            $table->string('age');
            $table->string('dateofbirth');
            $table->string('dateofdeath');
            $table->string('placeofdeath');
            $table->string('citizenship');
            $table->string('address');
            $table->string('civilstatus');
            $table->string('occupation');
            $table->string('namecemetery');
            $table->string('addresscemetery');
            $table->string('nameFather');
            $table->string('nameMother');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deceaseds');
    }
};
