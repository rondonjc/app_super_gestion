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
        Schema::table('proveedores',function(Blueprint $table){
            $table->string('uf',2)->after('nombre');
            $table->string('email',150)->after('uf');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proveedores',function(Blueprint $table){
            $table->dropColumn('uf');
            $table->dropColumn('email');
        });
    }
};
