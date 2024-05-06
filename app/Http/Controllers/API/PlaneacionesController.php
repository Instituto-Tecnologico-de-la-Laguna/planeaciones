<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materias;
use App\Models\Docentes;
use App\Models\Departamentos;
use App\Models\Carreras;


class PlaneacionesController extends Controller
{
    //MATERIAS
    public function getMaterias(){
        try{
            $data = Materias::get();
            return response()->json($data, 200);
        } catch(\Throwable $th){
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function createMaterias(Request $request){
        try{
            $data ['id_carr']= $request['id_carr'];
            $data ['clv_oficial']= $request['clv_oficial']; 
            $data ['nom_materias']= $request['nom_materias'];
            $data ['hr_teoricas']= $request['hr_teoricas'];
            $data ['hr_practicas']= $request['hr_practicas'];
            $res = Materias::create($data);
            return response()->json($res,200);

        } catch(\Throwable $th){
            return response()->json(['error' => $th->getMessage()],500);
        }

    }

    public function getByIdMaterias($id){
        try {
            $data = Materias::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function updateMaterias(Request $request,$id){
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

    public function deleteMaterias($id){
        try {
            $res = Materias::find($id)->delete();
            return response()->json(["deleted" => $res],200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    //DOCENTES

    public function getDocentes(){
        try {
            $data = Docentes::get();
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function createDocentes(Request $request){
        try {
            $data['Id_depar'] = $request['Id_depar'];
            $data['Nombre'] = $request['Nombre'];
            $data['Ap_paterno'] = $request['Ap_paterno'];
            $data['Ap_materno'] = $request['Ap_materno'];
            $data['Nombramiento'] = $request['Nombramiento'];
            $res = Docentes::create($data);
            return response()->json($res,200);

        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }

    }

    public function getByIdDocentes($id){
        try {
            $data = Docentes::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function updateDocentes(Request $request,$id){
        try {
             $data['Id_depar'] = $request['Id_depar'];
             $data['Nombre'] = $request['Nombre'];
             $data['Ap_paterno'] = $request['Ap_paterno'];
             $data['Ap_materno'] = $request['Ap_materno'];
             $data['Nombramiento'] = $request['Nombramiento'];
             Docentes::find($id)->update($data);
             $res = Docentes::find($id);
             return response()->json($res,200);

        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function deleteDocentes($id){
        try {
            $res = Docentes::find($id)->delete();
            return response()->json(["deleted" => $res],200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    //DEPARTAMENTOS
    public function getDepartamentos(){
        try {
            $data = Departamentos::get();
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function createDepartamentos(Request $request){
        try {
            $data['Dep_nom'] = $request['Dep_nom'];
            $res = Departamentos::create($data);
            return response()->json($res,200);

        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }

    }

    public function getByIdDepartamentos($id){
        try {
            $data = Departamentos::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function updateDepartamentos(Request $request,$id){
        try {
             $data['Dep_nom'] = $request['Dep_nom'];
             Departamentos::find($id)->update($data);
             $res = Departamentos::find($id);
             return response()->json($res,200);

        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function deleteDepartamentos($id){
        try {
            $res = Departamentos::find($id)->delete();
            return response()->json(["deleted" => $res],200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    //CARRERAS
    public function getCarreras(){
        try {
            $data = Carreras::get();
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function createCarreras(Request $request){
        try {
            $data['Id_depar'] = $request['Id_depar'];
            $data['Nom_carr'] = $request['Nom_carr'];
            $data['clv_oficial'] = $request['clv_oficial'];
            $res = Carreras::create($data);
            return response()->json($res,200);

        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }

    }

    public function getByIdCarreras($id){
        try {
            $data = Carreras::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function updateCarreras(Request $request,$id){
        try {
             $data['Id_depar'] = $request['Id_depar'];
             $data['Nom_carr'] = $request['Nom_carr'];
             $data['clv_oficial'] = $request['clv_oficial'];
             Carreras::find($id)->update($data);
             $res = Carreras::find($id);
             return response()->json($res,200);

        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }

    public function deleteCarreras($id){
        try {
            $res = Carreras::find($id)->delete();
            return response()->json(["deleted" => $res],200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500);
        }
    }



}
