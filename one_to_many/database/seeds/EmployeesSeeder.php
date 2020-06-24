<?php

use App\Task;
use App\Employe;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Employe::class, 50)
                      -> make()
                      -> each(function($employe){

              $task = Task::inRandomOrder() -> first();
              $employe -> task() -> associate($task);
              $employe -> save();
      });
    }
}
