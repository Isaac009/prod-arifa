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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_id');
            $table->string('project_image');
            $table->string('title');
            $table->foreignId('sponsor_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->datetime('from_date');
            $table->datetime('to_date');
            $table->text('description')->nullable();
            $table->text('recommendations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
