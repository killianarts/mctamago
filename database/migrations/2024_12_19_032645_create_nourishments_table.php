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
        Schema::create('nourishments', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 255);
            $table->decimal('s_price', total: 12, places: 2);
            $table->decimal('m_price', total: 12, places: 2);
            $table->decimal('l_price', total: 12, places: 2);
            $table->decimal('g_price', total: 12, places: 2);
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nourishments');
    }
};
