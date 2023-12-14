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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidad',5);
            $table->string('descricion',30);
            $table->timestamps();
        });

        //relacionamiento con la tabla productos
        Schema::table('productos',function (Blueprint $table) {
            $table->unsignedBigInteger('unidad_id');
            $table->foreign('unidad_id')->references('id')->on('unidades');
        });

        //relacionamiento con la tabla productos detalles
        Schema::table('producto_detalles',function (Blueprint $table) {
            $table->unsignedBigInteger('unidad_id');
            $table->foreign('unidad_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        //remover relacionamiento con la tabla productos detalles
        Schema::table('producto_detalles',function (Blueprint $table) {
            $table->dropForeign('producto_detalles_unidad_id_foreign');
            $table->dropColumn('unidad_id');
        });

        //remover relacionamiento con la tabla productos
        Schema::table('productos',function (Blueprint $table) {
            $table->dropForeign('productos_unidad_id_foreign');
            $table->dropColumn('unidad_id');
        });

        Schema::dropIfExists('unidades');
    }
};
