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
        Schema::create('articles', function (Blueprint $table) {
          
            $table->id();
            $table->timestamps();
            $table->string('title', 150);
            $table->string('description',255);
            $table->tinyInteger('visible')->default(1);
            $table->text('body')->nullable();
            $table->string('image', 255)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
