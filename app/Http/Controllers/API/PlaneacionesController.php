<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materias;


class PlaneacionesController extends Controller
{
    public function get(){
        try{
            $data = Materias::get();
            return response()->json($data, 200);
        } catch(\Throwable $th){
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function create(Request $request){
        try{
            $data ['id_carr']= $request['id_carr'];
            $data ['clv_oficial']= $request['clv_oficial']; 
            $data ['nom_materias']= $request['nom_materias'];
            $data ['hr_teoricas']= $request['hr_teoricas'];
            $data ['hr_practicas']= $request['hr_practicas'];
            $res = Materias::create ($data);
            return response()->json($res,200);

        } catch(\Throwable $th){
            return response()->json(['error' => $th->getMessage()],500);
        }

    }

    public function getById($id){
        try {
            $data = Materias::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function update(Request $request,$id){
        try {
            $data ['id_carr']= $request['id_carr'];
            $data ['clv_oficial']= $request['clv_oficial']; 
            $data ['nom_materias']= $request['nom_materias'];
            $data ['hr_teoricas']= $request['hr_teoricas'];
            $data ['hr_practicas']= $request['hr_practicas'];
            Materias::find($id)->update($data);
            $res = Materias::find($id);
            return response()->json($res,200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function delete($id){
        try {
            $res = Materias::find($id)->delete();
            return response()->json(["deleted" => $res],200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

}
