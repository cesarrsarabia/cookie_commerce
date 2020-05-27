<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('producto_id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('precio',8,2);            
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();
           
        });
        Schema::table('productos', function($table) {
            $table->foreign('categoria_id')->references('categoria_id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
