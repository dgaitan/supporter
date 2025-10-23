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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('deleted_by')->nullable()->constrained('users')->onDelete('set null');

            $table->string('title', 255);
            $table->string('ticket_number', 255)->unique()->index();
            $table->text('description')->nullable();
            $table->foreignId('status_id')->nullable()->constrained('statuses')->onDelete('set null');

            // resolved?
            $table->boolean('is_resolved')->default(false);
            $table->dateTime('resolved_at')->nullable();
            $table->foreignId('resolved_by')->nullable()->constrained('users')->onDelete('set null');
            $table->text('resolution_description')->nullable();

            // priority -> it will be an enum: low, medium, high
            $table->integer('priority')->default(0);

            // type -> it will be an enum: bug, feature, task
            $table->string('type', 255)->nullable();

            // assignment
            $table->foreignId('assigned_to')->nullable()->constrained('users')->onDelete('set null');

            // custom data
            $table->json('custom_data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
