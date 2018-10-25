<?php

use Illuminate\Database\Seeder;
use App\Districts;
use App\Regencies;
use App\Provinces;
use App\Areas;
use App\Sides;
use App\TreeCategories;
use App\Trees;
use App\TreeMaster;

class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
        	['name' => 'Kerambitan '],
        	['name' => ' Mengwi']
        ];
        foreach ($districts as $d) {
        	Districts::create($d);
        }


        $regencies = [
        	['name' => 'Tabanan'],
        	['name' => 'Denpasar']
        ];
        foreach ($regencies as $r) {
        	Regencies::create($r);
        }


        $provinces = [
        	['name' => 'Bali'],
        	['name' => 'Lombok']
        ];
        foreach ($provinces as $p) {
        	Provinces::create($p);
        }


        $areas = [
        	['name' => 'Area 1', 'id_districts'=>1, 'id_regencies'=>1, 'id_provinces'=>1],
        	['name' => 'Area 2', 'id_districts'=>2, 'id_regencies'=>2, 'id_provinces'=>2]
        ];
        foreach ($areas as $area) {
        	Areas::create($area);
        }


        $sides = [
        	['name' => 'Kanan'],
        	['name' => 'Kiri']
        ];
        foreach ($sides as $side) {
        	Sides::create($side);
        }


        $TreeCategories = [
        	['name' => 'Pohon'],
        	['name' => 'Pohon-pohonan']
        ];
        foreach ($TreeCategories as $TreeCategory) {
        	TreeCategories::create($TreeCategory);
        }


        $TreeMasters = [
        	['name' => 'Pohon Jambu'],
        	['name' => 'Mohon Mangga']
        ];
        foreach ($TreeMasters as $TreeMaster) {
        	TreeMaster::create($TreeMaster);
        }


        $trees = [
        	['id_user'=>1,'id_tree_masters'=>1,'id_tree_categories'=>1,'id_sides'=>1, 'id_areas'=>1, 'latitude'=>'23131', 'longitude'=>'fdfsafa','descriptions' =>'dsadsad fdsf saf asf '],
        	['id_user'=>1,'id_tree_masters'=>2,'id_tree_categories'=>2,'id_sides'=>2, 'id_areas'=>2, 'latitude'=>'45545', 'longitude'=>'54545','descriptions' =>'gfdgf dsfd ghgfsggf']
        ];
        foreach ($trees as $tree) {
        	Trees::create($tree);
        } 
    }
}
