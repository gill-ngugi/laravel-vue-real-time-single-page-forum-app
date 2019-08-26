<?php
// php artisan make:migration add_foreign_key_to_categories_table

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('body');
            $table->integer('user_id')->unsigned();
            $table->integer('question_id')->nullable()->index('question_id_index');
            //Use question_id as foreign key to delete the replies related to a deleted question           
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
        Schema::dropIfExists('replies');
    }
}
