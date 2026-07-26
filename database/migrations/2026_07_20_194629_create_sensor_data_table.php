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
    Schema::create('sensor_data', function (Blueprint $table) {

        $table->id();

        $table->foreignId('lamp_id')
              ->constrained()
              ->cascadeOnDelete();

        $table->integer('intensitas_cahaya');

        $table->string('status_gerakan');

        $table->decimal('penggunaan_listrik', 8, 2);

        $table->timestamp('waktu_pencatatan');

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_data');
    }
};
