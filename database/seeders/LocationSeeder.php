<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert(
            ['locations' => 'Abbottabad'],
            ['locations' => 'Adilpur'],
            ['locations' => 'Ahmedpur'],
            ['locations' => 'Ahmadpur Sial']);
    }
}
