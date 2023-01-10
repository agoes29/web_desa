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
        Schema::create('asetdesas', function (Blueprint $table) {
            $table->id();
            $table->string("no",255);
            $table->string('jb',255);
            $table->string('kb',255);
            $table->string('ib',255);
            $table->string('ab',255);
            $table->string('tp',255);
            $table->string('kt',255);
            $table->string('fb',255);
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
        Schema::dropIfExists('asetdesas');
    }
};
