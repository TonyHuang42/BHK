<?php

use App\Models\GalleryCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->foreignId('gallery_category_id')
                ->nullable()
                ->after('id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });

        $uncategorized = GalleryCategory::firstOrCreate(
            ['slug' => 'uncategorized'],
            ['name' => 'Uncategorized'],
        );

        DB::table('galleries')
            ->whereNull('gallery_category_id')
            ->update(['gallery_category_id' => $uncategorized->id]);

        Schema::table('galleries', function (Blueprint $table) {
            $table->foreignId('gallery_category_id')->nullable(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropConstrainedForeignId('gallery_category_id');
        });
    }
};
