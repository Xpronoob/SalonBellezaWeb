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
        Schema::create('accounting', function (Blueprint $table) {
            $table->id();
            $table->string('movement_description', 255);
            $table->decimal('amount', 10, 2);
            $table->dateTime('movement_date');
            $table->string('movement_type', 255);
            $table->string('transaction_type', 255)->nullable();
            $table->decimal('pending_balance', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounting');
    }
};
