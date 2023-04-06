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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('name', 141);
            $table->string('short_description', 510)->nullable();
            $table->string('full_description', 5000);
            $table->string('url_img', 255)->nullable();
            $table->timestamp('create_date');
            $table->timestamp('update_date');
        });

        Schema::table('news', function (Blueprint $table) {
            $table->foreignId('id_category')->constrained('categories');
            $table->foreignId('id_source')->constrained('source_news');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
