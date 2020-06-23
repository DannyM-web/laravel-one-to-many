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
      factory(Employe::class, 30)
                      -> make()
                      -> each(function($post){

              $task = Task::inRandomOrder() -> first();
              $post -> task() -> associate($task);
              $post -> save();
      });
    }
}
