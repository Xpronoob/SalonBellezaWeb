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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('location', 255)->nullable();
            $table->datetime('appointment_date');
            $table->string('stylist', 255)->nullable();
            $table->text('description')->nullable();
            $table->decimal('cost', 10, 2)->nullable();
            $table->timestamps(); // Adds created_at and updated_at fields as DATETIME
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
