<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card', function (Blueprint $table) {
            $table->id();
			$table->string('id_api');
			$table->string('name');
			$table->string('imageUrl', 200);
			$table->string('manaCost');
			$table->integer('quantidade')->nullable()->default(NULL);
			$table->boolean('disponivel')->nullable()->default(NULL);	
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
        Schema::dropIfExists('card');
    }
}
