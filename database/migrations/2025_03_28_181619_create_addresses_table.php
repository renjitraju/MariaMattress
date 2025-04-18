<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {

           $table->id();
           $table->timestamps();
           $table->string('name',191)->nullable();
           $table->integer('phone')->nullable();
           $table->string('email',191)->nullable(); 
           $table->string('address',191)->nullable();
           $table->integer('amount')->nullable();
           $table->string('order_id',191)->nullable();
           $table->enum('status', ['pending', 'paid', 'completed'])->default('pending');


        });
    }


    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
