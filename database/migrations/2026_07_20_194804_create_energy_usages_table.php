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
    Schema::create('energy_usages', function (Blueprint $table) {

        $table->id();

        $table->foreignId('lamp_id')
              ->constrained()
              ->cascadeOnDelete();

        $table->date('tanggal');

        $table->decimal('jumlah_kwh', 8, 2);

        $table->decimal('biaya_listrik', 10, 2);

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('energy_usages');
    }
};
