<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $v1 = new Vehicle();
        $v1->name="VEHICULO 01";
        $v1->brand="TOYOTA";
        $v1->model="YARIS";
        $v1->save();

        $v2 = new Vehicle();
        $v2->name="VEHICULO 02";
        $v2->brand="TOYOTA";
        $v2->model="COROLLA";
        $v2->save();

        $v3 = new Vehicle();
        $v3->name="VEHICULO 03";
        $v3->brand="NISSAN";
        $v3->model="FRONTIER";
        $v3->save();

        $v4 = new Vehicle();
        $v4->name="VEHICULO 04";
        $v4->brand="KIA";
        $v4->model="PICANTO";
        $v4->save();

        $v5 = new Vehicle();
        $v5->name="VEHICULO 05";
        $v5->brand="KIA";
        $v5->model="SPORTAGE";
        $v5->save();
    }
}
