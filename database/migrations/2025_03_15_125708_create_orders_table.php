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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('org_type_id')->constrained('organization_types');
            $table->string('organization_name');
            $table->text('address');
            $table->string('image');
            $table->string('mobile_no');
            $table->string('organization_head_name');
            $table->string('national_id')->nullable();
            $table->string('email')->nullable();
            $table->foreignId('package_id')->constrained('prices');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
