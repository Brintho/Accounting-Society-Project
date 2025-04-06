<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeContentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_contents', function (Blueprint $table) {
            $table->id();
            $table->string('company_address')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('company_email')->nullable();
            $table->string('messenger')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('website_link')->nullable();
            $table->string('image')->nullable();
            $table->string('iframe_link')->nullable();
            $table->string('title');
            $table->text('software_features')->nullable();
            $table->text('software_tagline')->nullable();
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_contents');
    }
}
