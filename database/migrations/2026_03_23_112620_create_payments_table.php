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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_detail_id')->constrained('booking_details')->cascadeOnDelete();
            $table->decimal('amount', 10, 2); // total paid
            $table->date('payment_date');
            $table->enum('payment_status', ['Partial', 'Paid', 'Refunded', 'COD'])->default('COD');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
