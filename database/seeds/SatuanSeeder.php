<?php

use Illuminate\Database\Seeder;
use App\Satuan;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $satuan = Satuan::create(['nama'=>'Pieces']);
        $satuan1 = Satuan::create(['nama'=>'Buah']);
    }
}
