<?php
// WARNING: TASK and Employes Sono opposte rispeto alla consegna dell'esercizio

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $table = 'employees';

    public function task(){

      return $this -> belongsTo(Task::class);
    }

    public function locations(){
      return $this -> belongsToMany(Location::class);
    }
}
