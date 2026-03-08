<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//+998 94 337 11 97
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('phone1', length: 13);
            $table->string('phone2', length: 13)->nullable();
            $table->string('phone3', length: 13)->nullable();
            $table->string('path');
            $table->string('email');
            $table->string('telegram');
            $table->string('instagram');
            $table->string('Facebook');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
