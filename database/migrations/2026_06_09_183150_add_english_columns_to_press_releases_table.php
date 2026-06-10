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
        Schema::table('press_releases', function (Blueprint $table) {
            $table->string('title_en')->nullable()->after('title');
            $table->text('summary_en')->nullable()->after('summary');
            $table->longText('body_en')->nullable()->after('body');
        });
    }

    public function down(): void
    {
        Schema::table('press_releases', function (Blueprint $table) {
            $table->dropColumn(['title_en', 'summary_en', 'body_en']);
        });
    }
};
