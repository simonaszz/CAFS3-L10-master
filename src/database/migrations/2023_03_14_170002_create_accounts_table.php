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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('type_id')->constrained('account_types')->cascadeOnDelete();

            $table->string('name', 50)->nullable();

            $table->string('address', 100)->nullable();

            $table->string('contact_number', 20)->nullable();

            $table->string('email', 50)->unique();

            $table->string('password', 100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
