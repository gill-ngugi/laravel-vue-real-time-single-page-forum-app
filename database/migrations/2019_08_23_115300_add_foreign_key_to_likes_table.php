<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('likes', function (Blueprint $table) {
            //
            $table->foreign('reply_id', 'reply_id_uniquey')->references('id')->on('replies')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('user_id', 'user_id_uniquey')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('likes', function (Blueprint $table) {
            //
            $table->dropForeign('reply_id_uniquey');
            $table->dropForeign('user_id_uniquey');
        });
    }
}
