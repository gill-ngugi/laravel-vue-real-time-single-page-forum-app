<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            //
            $table->foreign('category_id', 'category_id_uniquex')->references('id')->on('categories')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('user_id', 'user_id_uniquex')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            //
            $table->dropForeign('category_id_uniquex');
            $table->dropForeign('user_id_uniquex');
        });
    }
}
