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
        Schema::create('prod1', function (Blueprint $table) {
            $table->bigIncrements('prod1_id');
            $table->string('prod1_product', 255)->nullable();
            $table->string('prod1_code', 60)->nullable();
            $table->double('prod1_price1', 10, 2)->default(0.00);
            $table->string('prod1_title1', 255)->nullable();
            $table->string('prod1_title2', 255)->nullable();
            $table->text('prod1_text1')->nullable();
            $table->string('prod1_image1', 150)->nullable();
            $table->string('prod1_image2', 150)->nullable();
            $table->unsignedInteger('prod1_order')->default(1);
            $table->boolean('prod1_enable')->default(0);
            $table->timestamps(0); 
            $table->string('prod1_token', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prod1');
    }
};
