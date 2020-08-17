<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{


    function micuenta()
    {
        return view('pages/user/micuenta');
    }


    function micuentaColor(Request $request)
    {
        $data = $request->all();
        $user = User::find(Auth::user()->id);

       if($data['ubicacion'] == "color_barra"){
        $user->color_barra = $data['color'];
        Session::put('color_barra', $user->color_barra);
        }
        if($data['ubicacion'] == "color_lateral"){
        $user->color_lateral = $data['color'];
        Session::put('color_lateral', $user->color_lateral);
        }
        $user->save();
    }



    function password()
    {
        return view('pages/user/password');
    }



    function passwordGuardar(Request $request)
    { {
            $this->validate($request, [
                'old_password'     => 'required',
                'new_password'     => 'required|min:4',
                'confirm_password' => 'required|same:new_password',
            ]);

            $data = $request->all();

            if (!\Hash::check($data['old_password'], Auth::user()->password)) {

                toastr()->warning('Contraseña incorrecta.');
                return back();
            } else {

                $user = User::find(Auth::user()->id);
                $user->password = bcrypt($data['new_password']);
                $user->save();
                toastr()->success('Contraseña cambiada.');
            }

            return Back();
        }
    }
}
