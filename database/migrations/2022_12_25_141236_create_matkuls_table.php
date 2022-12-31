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
        Schema::create('matkuls', function (Blueprint $table) {
            $table->string('kode',10);
            $table->string('matkul',100);
            $table->string('dosen',150);
            $table->integer('sks');
            $table->integer('total_mhs');
            $table->string('ruangan',20);
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
        Schema::dropIfExists('matkuls');
    }
};
