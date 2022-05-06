<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("company");
            $table->string("publishedAt")->nullable();
            $table->string("instruction")->nullable();
            $table->string("type")->nullable();
            $table->string("mobileMode")->nullable();
            $table->string("subType")->nullable();
            $table->string("md5");
            $table->text("description");
            $table->string("width")->nullable();
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
        Schema::dropIfExists('games');
    }
}
