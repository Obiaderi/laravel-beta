<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ads_category_id');

            $table->enum('negotiable', ['yes', 'no'])->default('no');
            $table->enum('condition', ['new', 'used'])->default('new');
            $table->boolean('featured')->default(false);
            $table->string('price');

            $table->json('description')->nullable();
            $table->json('image_url')->nullable();
            $table->json('image_public_ids')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');

            $table->foreign('ads_category_id')->references('id')->on('ads_categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};