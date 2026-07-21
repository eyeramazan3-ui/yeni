<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('ad_soyad');
            $table->string('email');
            $table->string('telefon');
            $table->string('firma');
            $table->string('konu');
            $table->text('mesaj');
            $table->enum('durum', ['bekliyor', 'inceleniyor', 'onaylandi', 'reddedildi'])->default('bekliyor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
};