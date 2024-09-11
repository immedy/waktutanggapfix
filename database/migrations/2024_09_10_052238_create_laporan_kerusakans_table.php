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
        Schema::connection('mysql_2')->create('laporan_kerusakans', function (Blueprint $table) {
            $table->string('id')->primary()->unique();
            $table->foreignId('pegawai_id');
            $table->foreignId('ruangan_id');
            $table->string('keterangan');
            $table->dateTime('waktu_lapor');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_2')->dropIfExists('laporan_kerusakans');
    }
};
