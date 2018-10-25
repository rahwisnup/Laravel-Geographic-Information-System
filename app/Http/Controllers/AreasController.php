<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Areas;
use App\Districts;
use App\Regencies;
use App\Provinces;

class AreasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $index = 0;
        // $areas = Areas::all();
        $areas = DB::table('areas')
                ->join('districts','areas.id_districts','=','districts.id')
                ->join('regencies','areas.id_regencies','=','regencies.id')
                ->join('provinces','areas.id_provinces','=','provinces.id')
                ->select('areas.*','districts.name as districts_name','regencies.name as regencies_name', 'provinces.name as provinces_name')
                ->get();
        $data = array(
            'areas' => $areas
        );
        
        // dd($areas); 
        return view('admin.master_data.areas.index',$data, compact('areas','index','data'));        
    }


    public function createAreas(){
        $areas = Areas::all();
        $districts = Districts::all(); 
        $regencies = Regencies::all(); 
        $provinces = Provinces::all(); 
        return view('admin.master_data.areas.create', compact('districts', 'regencies','provinces'));
    }

    public function storeAreas(){
        Areas::create([
            'name' => request('name'),
            'id_districts' => request('id_districts'),
            'id_regencies' => request('id_regencies'),
            'id_provinces' => request('id_provinces'),
        ]);

        return redirect('/admin/areas/list');
    }

    public function editAreas($id){
        $areas = Areas::find($id);
        $districts = Districts::all(); 
        $regencies = Regencies::all(); 
        $provinces = Provinces::all(); 
        return view('admin.master_data.areas.edit',compact('areas','districts','regencies','provinces'));
    }

    public function updateAreas($id){
        $areas = Areas::find($id);

        $areas->update([
            'name' => request('name'),
            'id_districts' => request('id_districts'),
            'id_regencies' => request('id_regencies'),
            'id_provinces' => request('id_provinces'),
        ]);

        return redirect() -> route('areas.list');
    }

    public function deleteAreas($id)
    {
        $areas = Areas::findOrFail($id);

        $areas->delete();

        return redirect()->route('areas.list');
    }

    public function showAreas($id){
        $areas = Areas::find($id);
        $districts = Districts::all(); 
        $regencies = Regencies::all(); 
        $provinces = Provinces::all(); 
        return view('admin.master_data.areas.show', compact('areas','districts','regencies','provinces')); 
    }
}
