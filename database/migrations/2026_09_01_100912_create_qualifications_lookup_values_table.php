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
        Schema::create('qualifications_lookup_values', function (Blueprint $table): void {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('code')->nullable();
            $table->integer('sort_order')->default(0);
            $table->foreignId('lookup_type_id')->constrained('qualifications_lookup_types');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qualifications_lookup_values');
    }
};
