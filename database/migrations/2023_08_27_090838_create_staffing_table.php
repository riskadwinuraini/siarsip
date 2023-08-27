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
        Schema::create('staffing', function (Blueprint $table) {
            $table->id();
            $table->string('CPPK');
            $table->string('photo');
            $table->string('curriculum_vitae');
            $table->string('fip01');
            $table->string('fip02');
            $table->string('model_dk');
            $table->string('spmt');
            $table->string('certificate');
            $table->string('training_certificate');
            $table->string('marriage_certificate');
            $table->string('child_birth_certificate');
            $table->string('id_card');
            $table->string('death_certificate');
            $table->string('bpjs');
            $table->string('npwp');
            $table->string('sk');
            $table->string('competency_certification');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffing');
    }
};
