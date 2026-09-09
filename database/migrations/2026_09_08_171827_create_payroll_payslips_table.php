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
        Schema::create('payroll_payslips', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('run_id')->constrained('payroll_runs');
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('salary_revision_id')->constrained('payroll_salary_revisions');
            $table->integer('days_worked')->nullable();
            $table->unsignedBigInteger('gross_earnings')->default(0);
            $table->unsignedBigInteger('total_deductions')->default(0);
            $table->unsignedBigInteger('net_pay')->default(0);
            $table->foreignId('status_id')->constrained('payroll_lookup_values');
            $table->string('remarks', 255)->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();

            $table->index('employee_id', 'idx_payslips_employee_id');
            $table->index('run_id', 'idx_payslips_run');
            $table->index('status_id', 'idx_payslips_status_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_payslips');
    }
};
