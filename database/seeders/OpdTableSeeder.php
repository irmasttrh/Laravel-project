<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpdTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('opd')->delete();
        
        DB::table('opd')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'dinas kesehatan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'dinas p3a',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'dinas koperasi & umkm',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}