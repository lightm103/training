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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->string('place_name');
            $table->string('region');
            $table->integer('postal_code');
            $table->double('latitude');
            $table->double('longtitude');
            $table->string('email');
            $table->string('phone');
            $table->string('phone_mobile');
            $table->string('leader_name');
            $table->integer('children_count');
            $table->integer('worker_count');
            $table->integer('like_count');
            $table->integer('share_count');
            $table->integer('view_count');
            $table->integer('bookmark_count');
            $table->integer('donate_count');
            $table->boolean('is_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
