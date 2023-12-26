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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('from', 50);
            $table->string('to', 50);
            $table->string('date', 50);
            $table->string('departure_time', 50);
            $table->string('arrival_time', 50);
            $table->string('phone_number', 50);
            $table->unsignedBigInteger('seat_id')->unique();
            $table->foreign('seat_id')->references('id')->on('seats')
            ->restrictOnDelete()->cascadeOnUpdate();


            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
