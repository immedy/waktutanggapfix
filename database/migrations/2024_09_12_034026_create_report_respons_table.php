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
        Schema::connection('mysql_2')->create('report_respons', function (Blueprint $table) {
            $table->id();
            $table->string('tiket_id');
            $table->foreignId('petugas_id');
            $table->foreignId('jenis_kerusakan');
            $table->string('keterangan');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_2')->dropIfExists('report_respons');
    }
};
