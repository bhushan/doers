<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowersTable extends Migration
{
    public function up(): void
    {
        Schema::create('followers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('follower_id')
                ->comment('a person who is following')
                ->references('id')->on('users');
            $table->foreignId('following_id')
                ->comment('a person who is being followed')
                ->references('id')->on('users');

            $table->unique(['follower_id', 'following_id']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('followers');
    }
}
