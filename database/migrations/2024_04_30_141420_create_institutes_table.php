<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\text;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 90);
            $table->string('email', 90);
            $table->string('phone', 90);
            $table->string('address', 255);
            $table->string('about', 255);
            $table->string('map_address', 255);
            $table->string('facebook', 255)->nullable();
            $table->string('x', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('linkedin', 255)->nullable();
            $table->string('youtube', 255)->nullable();
            $table->string('logo_url');
            $table->text('mission');
            $table->string('vision');
            $table->string('values');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutes');
    }
};
