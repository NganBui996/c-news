<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintucs', function (Blueprint $table) {
            $table->increments('id_tintuc');
            $table->string('tieude');
            $table->string('tomtat');
            $table->text('noidung');
            $table->string('hinhanh');
            $table->integer('noibat');
            $table->integer('soluotkiem');
            $table->integer('id_loaitin');
            $table->longText('comment');
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
        Schema::drop('tintucs');
    }
}
