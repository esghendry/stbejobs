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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();

            $table->string('title_1')->nullable();
            $table->string('title_2')->nullable();

            $table->string('subtitle_1')->nullable();
            $table->string('subtitle_2')->nullable();

            $table->text('body')->nullable();

            $table->text('summary')->nullable();

            $table->text('image')->nullable();

            $table->string('lang');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
