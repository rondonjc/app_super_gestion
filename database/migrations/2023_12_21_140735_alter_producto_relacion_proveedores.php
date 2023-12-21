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
        Schema::table('productos',function(Blueprint $table){

            $table->unsignedBigInteger('proveedor_id')->after('id')->default('2');

            $table->foreign('proveedor_id')->references('id')->on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos',function(Blueprint $table){

            $table->dropForeign('producto_proveedor_id_foreign');
            $table->dropColumn('proveedor_id');

        });
    }
};
