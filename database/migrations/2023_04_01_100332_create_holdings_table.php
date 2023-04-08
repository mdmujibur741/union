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
        Schema::create('holdings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('spouse_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('village')->nullable();
            $table->string('profession')->nullable();
            $table->integer('id_no')->nullable();
            $table->integer('holding_no')->nullable();
            $table->string('word_no');
            $table->string('house_type')->nullable();
            $table->string('yearly_tax')->nullable();
            $table->text('opinion')->nullable();
            $table->foreignId('type_id')->constrained('house_shop_types')->cascadeOnDelete();  //Holding shop type model
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holdings');
    }
};
