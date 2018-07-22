<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSqrcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sqrcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('shorttitle');
            $table->string('description');
            $table->string('shortdescription');
            $table->string('inputs');
            $table->string('image')->nullable();
            $table->string('recomended')->nullable();
            $table->string('promotion')->nullable();
            $table->string('social')->nullable();
            $table->string('product')->nullable();
            $table->string('business')->nullable();
            $table->string('personal')->nullable();
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
        Schema::dropIfExists('sqrcodes');
    }
}
