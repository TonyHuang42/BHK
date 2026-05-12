<?php

use App\Models\PressReleaseCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('press_releases', function (Blueprint $table) {
            $table->foreignId('press_release_category_id')
                ->nullable()
                ->after('id')
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });

        $uncategorized = PressReleaseCategory::firstOrCreate(
            ['slug' => 'uncategorized'],
            ['name' => 'Uncategorized'],
        );

        DB::table('press_releases')
            ->whereNull('press_release_category_id')
            ->update(['press_release_category_id' => $uncategorized->id]);

        Schema::table('press_releases', function (Blueprint $table) {
            $table->foreignId('press_release_category_id')->nullable(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('press_releases', function (Blueprint $table) {
            $table->dropConstrainedForeignId('press_release_category_id');
        });
    }
};
