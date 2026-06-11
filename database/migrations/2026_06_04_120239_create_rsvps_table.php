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
    Schema::create('rsvps', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->enum('kehadiran', ['Hadir', 'Tidak Hadir']);
        $table->integer('pax')->default(0);
        $table->text('ucapan');
        $table->timestamps(); // Akan otomatis membuat kolom created_at & updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rsvps');
    }
};
