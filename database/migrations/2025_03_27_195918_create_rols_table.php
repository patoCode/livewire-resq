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
        Schema::create('rols', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('code')->nullable(false);
            $table->string('sys_code')->nullable(false);
            $table->string('icon')->default('bookmark')->nullable(false);
            $table->enum('status', ['activo', 'inactivo'])->default('activo');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rols');
    }
};
