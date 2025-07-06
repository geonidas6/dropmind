<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mind_drops', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('message');
            $table->foreignId('mood_id')->constrained();
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
            $table->string('image_path')->nullable();
            $table->foreignId('token_id')->constrained('user_tokens');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mind_drops');
    }
};
