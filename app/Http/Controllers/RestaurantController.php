<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Restaurants;

use Brian2694\Toastr\Facades\Toastr;


class RestaurantController extends Controller
{
    public function index(){
        $menus = Restaurants::select("id","almuerzo","cena","fecha")->where('borrado',0)->get();

        return view('pages/restaurant/menuDelDia',compact('menus'));
    }

    public function nuevo_menu(){
        $datos = request()->all();


        $this->validate(request(), [
            'almuerzo' => 'required',
            'cena' => 'required',
            'fecha' => 'required'
        ]);

        $fecha = date('Y-m-d',strtotime($datos['fecha']));

        $menus = new Restaurants();

        $menus->almuerzo = $datos['almuerzo'];
        $menus->cena = $datos['cena'];
        $menus->fecha = $fecha;

        $menus->save();
        Toastr::success('Se creo el registro.', 'Completado');

        return back();
    }

    public function guardar_menu(){
        $datos = request()->all();

        $this->validate(request(), [
            'almuerzo' => 'required',
            'cena' => 'required',
            'fecha' => 'required'
        ]);

        $menus = Restaurants::find($datos['id']);
        $fecha = date('Y-m-d',strtotime($datos['fecha']));

        $menus->almuerzo = $datos['almuerzo'];
        $menus->cena = $datos['cena'];
        $menus->fecha = $fecha;

        if(isset($datos['borrar'])){
            $menus->borrado = 1;
            Toastr::warning('Se borro el registro.', 'Completado');
        }

        else {Toastr::success('Se guardo el menu.', 'Completado');}

        $menus->save();

        return back();
    }
}
