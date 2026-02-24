<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Use raw SQL to alter the column to VARCHAR to avoid requiring doctrine/dbal
        DB::statement("ALTER TABLE `portfolios` MODIFY `category` VARCHAR(255) NOT NULL");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert back to the original enum set (keep original values; adjust if needed)
        DB::statement("ALTER TABLE `portfolios` MODIFY `category` ENUM('wedding','portrait','commercial','editorial','landscape') NOT NULL");
    }
};
