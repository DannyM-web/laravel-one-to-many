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

        $table -> foreign('task_id', 'task') //nome colonna , nomee relazione
               -> references('id') //referenza alla colonna
               -> on('tasks') //nome tabella referenziata
               -> onDelete('cascade') // elimina righe bypassando il problema delle relazioni
               ;
      });
      Schema::table('employe_location', function (Blueprint $table) {

        $table  -> foreign('employe_id', 'employe')
                -> references('id')
                -> on('employees')
                -> onDelete('cascade')
        ;
        $table  -> foreign('location_id', 'location')
                -> references('id')
                -> on('locations')
                -> onDelete('cascade')
        ;

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

      Schema::table('employe_location', function (Blueprint $table) {
          $table -> dropForeign('employe');
          $table -> dropForeign('location');
      });
    }
}
