<?php

use Illuminate\Database\Seeder;
use App\Employe;
use App\Location;
class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Location::class, 40)
                    -> create()
                    -> each(function($location){
          $employees = Employe::inRandomOrder() -> take(rand(1,3)) -> get();
          $location -> employees() -> attach($employees);
      });
    }
}
