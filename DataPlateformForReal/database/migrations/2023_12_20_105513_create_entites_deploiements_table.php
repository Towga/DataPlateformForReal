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
        Schema::create('entites_deploiements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char("siret",14);
            $table->boolean("estinterne");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entites_deploiements');
    }
};
