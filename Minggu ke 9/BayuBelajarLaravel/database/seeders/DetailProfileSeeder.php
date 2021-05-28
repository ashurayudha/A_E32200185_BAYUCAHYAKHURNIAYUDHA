<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table pegawai
        DB::table('detail_profile')->insert([
        	'address' =>'Jember',
        	'nomor_tlp'=>'08123xxxx',
        	'ttl'=>'2001-03-09',
        	'foto'=>'picture.png'
        ]);
    }
}
