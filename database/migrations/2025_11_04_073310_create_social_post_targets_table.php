<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('social_post_targets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('social_post_id')->constrained('social_posts')->cascadeOnDelete();
            $table->foreignId('social_account_id')->constrained('social_accounts')->cascadeOnDelete();
            $table->enum('status', ['scheduled','publishing','published','failed'])->default('scheduled');
            $table->string('external_post_id')->nullable();
            $table->text('error_message')->nullable();
            $table->timestamps();
            $table->unique(['social_post_id', 'social_account_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('social_post_targets');
    }
};
