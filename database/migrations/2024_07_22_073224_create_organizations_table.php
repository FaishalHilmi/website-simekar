<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jabatan', ['Kepala Desa', 'Sekretaris Desa', 'Kepala Dusun 1', 'Kepala Dusun 2', 'Kepala Dusun 3', 'Kepala Dusun 4', 'Kepala Dusun 5', 'Kepala Dusun 6', 'Kepala Dusun 7', 'Kepala Dusun 8', 'Kepala Dusun 9',]);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
