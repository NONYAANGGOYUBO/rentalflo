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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('title');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('pincode');
            $table->string('rent');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('tenant_id')->nullable();
            $table->string('tenant_name')->nullable();
            $table->float('lattitude')->nullable();
            $table->float('longitude')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
