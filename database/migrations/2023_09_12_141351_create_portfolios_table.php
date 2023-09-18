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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();

            // 이미지는 따로 연동
            $table->unsignedBigInteger('category_id');
            $table->text('tool')->nullable();
            $table->text('work_detail')->nullable();

            $table->string('site_link')->nullable();
            $table->string('plan_link')->nullable();

            $table->text('description')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('portfolio_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
