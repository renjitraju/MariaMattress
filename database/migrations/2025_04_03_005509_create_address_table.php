<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('name',191)->nullable();
            $table->string('phone',191)->nullable();  // Change integer to string
            $table->string('email',191)->nullable();
            $table->string('address',191)->nullable();
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::table('customer_addresses', function (Blueprint $table) {
            //
        });
    }
};
