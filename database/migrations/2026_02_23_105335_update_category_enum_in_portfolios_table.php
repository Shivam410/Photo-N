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
        // Modify existing `category` column to include new enum values.
        // Use raw SQL to ensure compatibility across MySQL versions.
        if (Schema::hasTable('portfolios')) {
            \DB::statement("ALTER TABLE `portfolios` MODIFY `category` ENUM('wedding','portrait','commercial','editorial','landscape','nature','passion','architecture') NOT NULL");
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            //
        });
    }
};
