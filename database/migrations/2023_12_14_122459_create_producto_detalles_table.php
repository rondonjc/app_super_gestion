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
        Schema::create('producto_detalles', function (Blueprint $table) {

            //columnas
            $table->id();
            $table->unsignedBigInteger('producto_id');
            $table->float('anchura',8,2);
            $table->float('largura',8,2);
            $table->float('altura',8,2);
            $table->timestamps();

            //constraint
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->unique('producto_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_detalles');
    }
};
