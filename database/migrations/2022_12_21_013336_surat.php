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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string("nama",255);
            $table->string("tempatl",2550);
            $table->string("tanggall",255);
            $table->string("jk",255);
            $table->string("alamat",255);
            $table->string('br',255);
            $table->string("tglm",255);
            $table->string('tempatm',255);
            $table->string("penyebabm",255);
            $table->string("nosuratdesa",255);
            $table->string("nosuratbr",255);
            $table->string("tglsuratbr",255);
            $table->string("tglsuratdesa",255);
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
        Schema::dropIfExists('surats');
    }
};
