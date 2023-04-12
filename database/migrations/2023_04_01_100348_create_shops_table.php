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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('organization');
            $table->string('name');
            $table->string('father');
            $table->string('address');
            $table->string('mobile')->nullable();
            $table->string('budget')->nullable();
            $table->string('annually_tax')->nullable();
            $table->text('opinion')->nullable();
            $table->foreignId('type_id')->constrained('house_shop_types')->cascadeOnDelete()->nullable();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }






    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
