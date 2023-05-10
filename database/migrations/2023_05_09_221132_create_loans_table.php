<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
   
        
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->date('loan_date');
            $table->date('return_date');
            
            $table->foreignId('book_id')->nullable();
            $table->foreignId('people_id')->nullable();
            $table->string('delay')->default("a prazo");

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
