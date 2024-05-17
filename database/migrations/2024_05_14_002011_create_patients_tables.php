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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cpf');
            $table->date('birthdate');

            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_clinic');
            $table->foreign('id_clinic')->references('id')->on('clinics')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
