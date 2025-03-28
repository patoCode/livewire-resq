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
        Schema::create('views', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('icon')->default('folder');
            $table->text('description')->nullable(false);
            $table->string('route')->nullable(false);
            $table->string('version')->default(0);
            $table->enum('status', ['activo', 'inactivo'])->default('activo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('views');
    }
};

