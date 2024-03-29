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
        Schema::create('source_news', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::table('source_news', function (Blueprint $table) {
            $table->foreignId('id_category')->constrained('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('source_news');
    }
};
