<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateContentTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbldjs_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 160)->nullable();
            $table->string('title', 160)->nullable();
            $table->string('url', 160)->nullable();
            $table->string('lang', 2)->nullable();
            $table->text('content')->nullable();
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
        Schema::dropIfExists('cbldjs_templates');
    }
}
