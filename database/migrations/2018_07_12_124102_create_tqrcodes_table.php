<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTqrcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tqrcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('shorttitle');
            $table->text('text');
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
        Schema::dropIfExists('tqrcodes');
    }
}
