<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Read the SQL file that contains the table creation statement
        $sql = File::get(database_path('sql/leveranciers.sql'));

        // Execute the SQL without preparing it
        DB::unprepared($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the table in the down method to reverse the migration
        DB::statement('DROP TABLE IF EXISTS leveranciers');
    }
};
