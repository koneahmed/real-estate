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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('type_operation');
            $table->string('libelle')->nullable();
            $table->string('localisation')->nullable();
            $table->string('superficie')->nullable();
            $table->integer('nombre_piece')->nullable();
            $table->integer('nombre_douche')->nullable();
            $table->integer('nombre_garage')->nullable();
            $table->float('prix')->default(0);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('type_bien_id')->nullable();
            $table->foreign('type_bien_id')->references('id')->on('type_biens')->onUpdate('cascade')->onDelete('set null');
            $table->unsignedBigInteger('bailleur_id')->nullable();
            $table->foreign('bailleur_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
