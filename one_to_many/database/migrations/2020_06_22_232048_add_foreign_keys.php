<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('employees', function (Blueprint $table) {

        $table -> foreign('task_id', 'task')
               -> references('id')
               -> on('tasks');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::create('employees', function (Blueprint $table) {

        $table -> dropForeign('task');

      });
    }
}
