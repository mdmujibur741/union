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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('receiver_contact')->nullable();
            $table->text('purpose')->nullable();
            $table->string('amount');
            $table->string('amount_in_word')->nullable();
            $table->string('date')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};
