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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('code',20)->unique();
            $table->string('icon')->default('computer-desktop');
            $table->enum('is_public',['si','no'])->default('si');
            $table->enum('is_schedulable',['si','no'])->default('si');
            $table->enum('is_promediable',['si','no'])->default('si');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
