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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publication_type_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('publication_tag_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('title');
            $table->date('published_on');
            $table->longText('content');
            $table->string('image');
            $table->string('attachments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
