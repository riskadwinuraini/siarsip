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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nip', 20)->nullable();
            $table->enum('type_pegawai', ['p3k', 'pns'])
                ->default('p3k');
            $table->string('no', 13)->nullable();
            $table->string('work_unit')->nullable();
            $table->string('gender')->nullable();
            $table->enum('status', ['aktif', 'pensiun'])
                ->default('aktif');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
