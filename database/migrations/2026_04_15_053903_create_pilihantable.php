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
       Schema::create('pilihan', function (Blueprint $table) {
            $table->id('id_pilihan');
            $table->string('pilihan_text');
            $table->boolean('pilihan_benar')->default(false);
            $table->unsignedBigInteger('id_pertanyaan');

            $table->foreign('id_pertanyaan')
                ->references('id_pertanyaan')
                ->on('pertanyaan')
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilihantable');
    }
};
