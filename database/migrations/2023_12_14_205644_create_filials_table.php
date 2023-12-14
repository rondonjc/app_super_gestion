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
        Schema::create('filiales', function (Blueprint $table) {
            $table->id();
            $table->string('filial',30);
            $table->timestamps();
        });

        Schema::create('productos_filiales', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('producto_id');
            $table->float('precio_venta',8,2)->default(0.01);
            $table->integer('estoque_minimo')->default(0);
            $table->integer('estoque_maximo')->default(1);

            $table->foreign('filial_id')->references('id')->on('filiales');
            $table->foreign('producto_id')->references('id')->on('productos');


        });

        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn(['precio_venta','estoque_minimo','estoque_maximo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {

            $table->float('precio_venta',8,2)->default(0.01);
            $table->integer('estoque_minimo')->default(0);
            $table->integer('estoque_maximo')->default(1);

        });

        Schema::dropIfExists('productos_filiales');
        Schema::dropIfExists('filiales');
    }
};
