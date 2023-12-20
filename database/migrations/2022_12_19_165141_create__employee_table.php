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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->bigInteger('no_telp');
            $table->enum('servis', ['cuci', 'setrika', 'laundry']);
            $table->string('keterangan');
            $table->integer('kg');
            $table->bigInteger('biaya');
            $table->enum('status', ['proses', 'selesai', 'diambil', 'antar']);
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->default(0); // Change the default value as needed
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        }); // Added a missing semicolon here
    }
};
