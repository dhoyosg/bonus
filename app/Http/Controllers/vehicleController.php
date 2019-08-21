<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Owner;
class vehicleController extends Controller
{
    public function showStats(){
        $tMazda = Vehicle::where('marca', "Mazda")->count();
        $tToyota = Vehicle::where('marca', "Toyota")->count();
        $tChevrolet = Vehicle::where('marca', "Mazda")->count();

        return view("stats",["tMazda"=>$tMazda,"tToyota"=>$tToyota,"tChevrolet"=>$tChevrolet]);
    }

    public function listVeh(){
        $vehicles = Vehicle::all();
        return view("listveh",["vehicles"=>$vehicles]);
    }

    public function vistaRegistrar(){
        return view('registerveh');
    }

    public function registerVehicle(){
        $datos = request();
        $letras=substr($datos["placa"], 0, 3);
        $numeros=substr($datos["placa"], -3, 3);
        $placafin=strtoupper($letras).$numeros;
        //$datos=request()["placa"]=$placafin;
        $datos=request()->validate(["marca" =>["regex:/Toyota|Chevrolet|Mazda/"],
            "id" => ["required","numeric","min:1"],
            "name" => ["required"],
            "placa" => ["required"]
            ],
            ["marca.regex"=>"Ingrese una marca valida",
                "id.required"=>"La cedula es obligatoria",
                "id.numeric" =>"La cedula debe ser numerica",
                "id.min"=>"Ingrese una logitud de cedula valida",
                "name.required"=>"El nombre de usuario es obligatorio",
                "placa.required" =>"La placa es obligatoria"
            ]
        );
        $owner = Owner::create(["id"=>$datos["id"], "name"=>$datos["name"]]);
        $veh = Vehicle::create(["placa"=>$datos["placa"], "marca" =>$datos["marca"], "owners_id"=>$datos["id"]]);
        if($owner->wasRecentlyCreated == true){
            if ($veh->wasRecentlyCreated == true ){
                return redirect()->back()->with('alert', 'Registro exitoso');
            }
        }
       //$veh = Vehicle::create(["placa"=>$placafin]);
    }
}
