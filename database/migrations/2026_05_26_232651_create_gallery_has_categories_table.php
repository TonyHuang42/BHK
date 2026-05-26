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
        Schema::create('gallery_has_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gallery_id')->constrained()->cascadeOnDelete();
            $table->foreignId('gallery_category_id')->constrained()->cascadeOnDelete();
            $table->unique(['gallery_id', 'gallery_category_id']);
            $table->timestamps();
        });

        DB::table('galleries')
            ->whereNotNull('gallery_category_id')
            ->select('id as gallery_id', 'gallery_category_id')
            ->orderBy('id')
            ->chunk(500, function ($rows) {
                $now = now();
                DB::table('gallery_has_categories')->insert(
                    $rows->map(fn ($r) => [
                        'gallery_id' => $r->gallery_id,
                        'gallery_category_id' => $r->gallery_category_id,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ])->all()
                );
            });

        Schema::table('galleries', function (Blueprint $table) {
            $table->dropConstrainedForeignId('gallery_category_id');
        });
    }

    public function down(): void
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

        DB::table('gallery_has_categories')
            ->select('gallery_id', 'gallery_category_id')
            ->orderBy('gallery_id')
            ->chunk(500, function ($rows) {
                foreach ($rows as $row) {
                    DB::table('galleries')
                        ->where('id', $row->gallery_id)
                        ->whereNull('gallery_category_id')
                        ->update(['gallery_category_id' => $row->gallery_category_id]);
                }
            });

        DB::table('galleries')
            ->whereNull('gallery_category_id')
            ->update(['gallery_category_id' => $uncategorized->id]);

        Schema::table('galleries', function (Blueprint $table) {
            $table->foreignId('gallery_category_id')->nullable(false)->change();
        });

        Schema::dropIfExists('gallery_has_categories');
    }
};
