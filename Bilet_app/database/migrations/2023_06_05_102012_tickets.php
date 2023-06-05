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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('trips_id'); // trips tablosuna bağlanan foreign key
            $table->unsignedInteger('ticket_price');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('trips_id')->references('id')->on('trips'); // trips tablosuna referans
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
