<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('replies', function (Blueprint $table) {
            //
            // $table->dropForeign('replies_question_id_foreign');
            $table->foreign('question_id', 'question_id_unique')->references('id')->on('questions')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('category_id', 'category_id_unique')->references('id')->on('categories')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('replies', function (Blueprint $table) {
            //
            $table->dropForeign('question_id_unique');
            $table->dropForeign('category_id_unique');
        });
    }
}
