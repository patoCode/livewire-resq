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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable(false);
            $table->integer('priority')->default(1000);
            $table->enum('stage',['pending', 'on_progress','pause','waiting_for_client','waiting_for_parts','scheduled','escalated','done','closed','cancelled','rejected'])->default('pending');
            $table->enum('type',['user','tech','system'])->default('user');
            $table->enum('status',['active', 'inactive'])->default('active');
            $table->date('registry')->default(now());
            $table->enum('is_promediable',['si','no'])->default('no');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};
