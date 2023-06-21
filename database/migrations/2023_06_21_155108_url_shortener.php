<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UrlShortener extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_shortener', function (Blueprint $table) {
            $table->id();
            $table->string('original_url');
            $table->string('short_url')->unique();
            $table->string('alias_url')->unique();
            $table->integer('clicks');
            $table->date('expire_date');
            $table->unsignedBigInteger('token_id');
            $table->foreign('token_id')->references('id')->on('tokens');
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('url_shortener');
    }
}
