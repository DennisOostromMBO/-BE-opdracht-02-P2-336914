<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSpGetAllGeleverdeProductenProcedure extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Laad de SQL voor de stored procedure uit een bestand
        $path = database_path('sp/spGetAllGeleverdeProducten.sql');
        DB::unprepared(file_get_contents($path));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Verwijder de stored procedure als de migratie wordt teruggedraaid
        DB::unprepared('DROP PROCEDURE IF EXISTS spGetAllGeleverdeProducten');
    }
}
