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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('field_id');
            $table->string('name')->nullable();
            $table->string('no_telepon')->nullable();
            $table->date('date');
            $table->string('time')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('total_price');
            $table->enum('status', ['selesai', 'pending', 'diterima', 'dibatalkan'])->default('pending');
            $table->string('proof_of_payment')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
