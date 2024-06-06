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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("ct_name");
            $table->string("ct_email");
            $table->string("ct_phone");
            $table->string("ct_topic");
            $table->string("ct_concent");
            $table->string("ct_privacy");
            $table->string("ct_role");
            $table->string("ct_company");
            $table->string("ct_country");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
