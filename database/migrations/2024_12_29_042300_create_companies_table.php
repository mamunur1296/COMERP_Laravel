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
        Schema::create('companies', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string("Name")->unique(); // Unique name for the company
            $table->text("Description")->nullable(); // Description can be null
            $table->dateTime("EstablishedDate")->nullable(); // Nullable if the date is unknown
            $table->string("ContactEmail")->unique(); // Unique email address
            $table->string("Phone")->unique(); // Nullable phone number
            $table->string("Address")->nullable(); // Nullable address
            $table->string("Website")->nullable(); // Nullable website
            $table->string("CreatedBy")->nullable(); // Track creator
            $table->string("UpdatedBy")->nullable(); // UpdatedBy can be nullable
            $table->timestamps(); // Automatically adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
