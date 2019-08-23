<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            //unsigned means it shouldnt have negative values
            // $table->integer('category_id')->unsigned();
            // $table->integer('user_id')->unsigned();
            $table->integer('category_id')->nullable()->index('category_id_index');
            $table->integer('user_id')->nullable()->index('user_id_index');
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
        Schema::dropIfExists('questions');
    }
}
