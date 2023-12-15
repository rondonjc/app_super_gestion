<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //adicionamos columna motivo_contacto_id
        Schema::table('site_contactos',function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contacto_id');
        });

        //actualizamos columna motivo_contacto_id con motivo_contacto
        DB::statement('UPDATE site_contactos SET motivo_contacto_id = motivo_contacto');

        //creamos fk
        Schema::table('site_contactos',function (Blueprint $table) {
            $table->foreign('motivo_contacto_id')->references('id')->on('motivo_contactos');
            $table->dropColumn('motivo_contacto');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_contactos',function (Blueprint $table) {
            $table->integer('motivo_contacto');
            $table->dropForeign('site_contactos_motivo_contacto_id_foreign');
        });

        DB::statement('UPDATE site_contactos SET motivo_contacto = motivo_contacto_id');

        Schema::table('site_contactos',function (Blueprint $table) {
            $table->dropColumn('motivo_contacto_id');
        });
    }
};
