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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->string('the_groom');
            $table->string('father_groom');
            $table->string('mother_groom');
            $table->string('the_bride');
            $table->string('father_bride');
            $table->string('mother_bride');
            $table->string('contract_date');
            $table->string('contract_address');
            $table->string('reception_date');
            $table->string('reception_address');
            $table->string('image_groom');
            $table->string('image_bride');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
