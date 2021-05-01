<?php

use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'detail'=>'R 5337 PC',
                'inventori_name'=>'Mobil Toyota Fortuner Biru'
            ],
            [
                'detail'=>'R 1234 AC',
                'inventori_name'=>'Mobil Honda Jazz Merah'
            ],
            [
                'detail'=>'R 3342 PC',
                'inventori_name'=>'Mobil Honda Jazz Kuning'
            ],
        ];
        foreach($data as $d){
            DB::table('inventories')->insert([
                'name'    => $d['inventori_name'],
                'detail'        => $d['detail']
            ]);
        }
    }
}
