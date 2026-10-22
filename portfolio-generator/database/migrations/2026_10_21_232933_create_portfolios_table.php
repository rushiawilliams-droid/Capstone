<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('profile_picture')->nullable();
            $table->string('email');
            $table->string('contact_number');
            $table->text('address');
            $table->text('about_me');
            $table->text('educational_background');
            $table->text('skills');
            $table->text('projects');
            $table->text('work_experience');
            $table->string('social_links')->nullable();
            $table->integer('template_id')->default(1); // 1, 2, or 3
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('portfolios');
    }
};