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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string("nombrs",20);
            $table->string("apellidos",20);
            $table->date("fnacimiento");
            $table->string("telefono",8);
            $table->string("descripcion",5000);

            $table->unsignedBigInteger("taller_id");
            $table->foreign("taller_id")->references("id")->on("tallers");
            
            $table->unsignedBigInteger("ciudad_id");
            $table->foreign("ciudad_id")->references("id")->on("ciudads");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
