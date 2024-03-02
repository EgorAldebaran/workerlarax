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
        Schema::create('build_malls', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('title');
            $table->string('level1');
            $table->string('level2');
            $table->string('level3');
            $table->string('price');
            $table->string('priceSP');
            $table->string('count');
            $table->string('properties', 4000);
            $table->string('additionalBuy');
            $table->string('dimension');
            $table->string('image');
            $table->string('isMainPage');
            $table->text('description', 4000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('build_malls');
    }
};
