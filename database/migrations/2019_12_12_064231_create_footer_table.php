<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('col_1_title')->nullable();
            $table->string('col_2_title')->nullable();
            $table->string('col_3_title')->nullable();
            $table->string('col_4_title')->nullable();
            $table->string('col_5_title')->nullable();

            $table->text('col_1_content')->nullable();
            $table->text('col_2_content')->nullable();
            $table->text('col_3_content')->nullable();
            $table->text('col_4_content')->nullable();
            $table->text('col_5_content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footer');
    }
}
