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
        Schema::create('lookup_values', function (Blueprint $table): void {
            $table->id();
            $table->json('name');
            $table->string('code')->nullable();
            $table->integer('sort_order')->default(0);
            $table->string('filename')->nullable();
            $table->foreignId('lookup_type_id')->constrained('lookup_types');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();

            $table->unique(['lookup_type_id', 'code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lookup_values');
    }
};
