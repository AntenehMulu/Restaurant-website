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
        Schema::create('chefs', function (Blueprint $table) {
            $table->id();
            $table->string('chef_name');
            $table->string('chef_title');
            $table->string('chef_cover');
            $table->string('chef_facebook');
            $table->string('chef_linkedin');
            $table->string('chef_twitter');
            $table->string('chef_instagram');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chefs');
    }
};
