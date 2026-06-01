<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gallery_image_has_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gallery_image_id')->constrained()->cascadeOnDelete();
            $table->foreignId('gallery_image_category_id')->constrained()->cascadeOnDelete();
            $table->unique(['gallery_image_id', 'gallery_image_category_id'], 'gallery_image_category_unique');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gallery_image_has_categories');
    }
};
