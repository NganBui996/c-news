<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanhs', function (Blueprint $table) {
            $table->increments('id_hinhanh');
            $table->string('ten_hinhanh');
            $table->timestamps('create_at');
            $table->timestamps('update_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hinhanhs');
    }
}
