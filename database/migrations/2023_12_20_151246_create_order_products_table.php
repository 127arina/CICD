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
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('Provinsi');
            $table->string('Kota');
            $table->string('Desa');
            $table->string('Jalan');
            $table->string('RT_RW');
            $table->integer('jumlah');
            $table->decimal('harga', 10, 2);
            $table->dateTime('tanggal_pesan');
            $table->string('keterangan');
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->default(0);


        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
};
