<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('ISBN')->nullable();
            $table->string('title')->nullable();
            $table->string('author')->nullable();
            $table->string('img')->nullable();
            $table->string('type')->nullable();
            $table->string('stars')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn ([
                'ISBN',
                'title',
                'author',
                'img',
                'type',
                'stars',
                ]);
                
        });
    }
}
