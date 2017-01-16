<?php

use Illuminate\Database\Seeder;
use App\Kategori_barang;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategori = Kategori_barang::create(['nama'=>'Makanan']);
        $kategori1 = Kategori_barang::create(['nama'=>'Minuman']);

    }
}
