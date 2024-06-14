<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('makanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->decimal('harga', 10, 2);
            $table->text('deskripsi');
            $table->string('gambar');
            $table->enum('kategori', ['Maincourse', 'Pasta', 'Bowl Series', 'French Fries Series', 'Finger Food', 'Sweet']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('makanans');
    }
};
