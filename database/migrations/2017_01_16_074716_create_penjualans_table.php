<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('faktur');
            $table->string('pelanggan');
            $table->integer('id_barang');
            $table->string('jenis');
            $table->integer('jumlah_beli');
            $table->integer('jumlah_harga');
            $table->integer('jumlah_bayar');
            $table->integer('jumlah_belum_bayar')->nullable();
            $table->string('jatuh_tempo')->nullable();
            $table->integer('status')->nullable();
            $table->string('petugas_input')->nullable();
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
        Schema::dropIfExists('penjualans');
    }
}
