<?php

use App\Owner;
use App\Vehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $owner = Owner::create(["id"=>1, "name"=>"Danovis"]);
        $owner2 = Owner::create(["id"=>2, "name"=>"Macnelly"]);
        $veh2 = Vehicle::create(["placa"=>"BRE666", "marca" =>"Mazda", "owners_id"=>2]);
        $veh = Vehicle::create(["placa"=>"AMQ789", "marca" =>"Toyota", "owners_id"=>1]);
    }
}
