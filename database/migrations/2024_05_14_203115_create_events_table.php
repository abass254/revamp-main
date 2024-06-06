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
        Schema::create('events', function (Blueprint $table) {
            // '', '', '', '', '', '',  '', '', '', '', ''
            $table->id();
            $table->string('ev_title');
            $table->string('ev_type');
            $table->string('ev_code');
            $table->string('ev_link')->nullable();
            $table->string('ev_banner');
            $table->string('ev_venue')->nullable();
            $table->string('ev_date');
            $table->string('ev_start');
            $table->string('ev_end');
            $table->string('ev_desc')->nullable();
            $table->string('ev_status')->default(1);
            $table->string('ev_presenter')->nullable();
            $table->string('ev_gender')->nullable();
            $table->string('ev_photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
