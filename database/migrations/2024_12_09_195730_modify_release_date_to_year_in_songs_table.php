<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyReleaseDateToYearInSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('songs', function (Blueprint $table) {
            // Eliminar el campo `release_date`
            $table->dropColumn('release_date');

            // Agregar un nuevo campo `release_year` que solo almacena el año
            $table->year('release_year')->after('style')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('songs', function (Blueprint $table) {
            // Eliminar el campo `release_year`
            $table->dropColumn('release_year');

            // Restaurar el campo `release_date`
            $table->date('release_date')->after('style')->nullable();
        });
    }
}
