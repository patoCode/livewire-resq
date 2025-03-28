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
        Schema::create('rol_views', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('view_id');
            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('cascade');
            $table->foreign('view_id')->references('id')->on('views')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_views');
    }
};
