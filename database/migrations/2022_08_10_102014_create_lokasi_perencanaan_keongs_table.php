<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_perencanaan_keong', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('perencanaan_keong_id');
            $table->uuid('lokasi_keong_id');
            $table->integer('status'); // 0/1 = Belum/Selesai
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokasi_perencanaan_keong');
    }
};
