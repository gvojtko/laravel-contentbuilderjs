<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbldjs_blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('img')->nullable();
            $table->integer('category_id')->unsigned();
            $table->text('css')->nullable();
            $table->text('js')->nullable();
            $table->text('html')->nullable();
            $table->timestamps();
            $table->unique('id', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cbldjs_blocks');
    }
}
