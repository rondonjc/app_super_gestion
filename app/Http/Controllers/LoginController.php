<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(Request $request){
        $erro = $request->get('erro');
        return view('site.login',['erro'=>$erro]);
    }

    public function autenticar(Request $request){

        $regras = [
            'name'=>'email',
            'password'=>'required'
        ];
        $feedback = [
            'name.email'=> 'Ingrese un email valido',
            'password.required' => 'La clave es obrigatoria'
        ];

        $request->validate($regras,$feedback);

        $email = $request->get('name');
        $password = $request->get('password');

        $user = new User();

        $usuario = $user->where('email',$email)->where('password',$password)->first();

        if(isset($usuario->name)){
            session_start();
            $_SESSION['name']=$usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        }else{
            return redirect()->route('site.login',['erro'=>'Usuario o Contraseña errada']);
        }
    }

    public function salir(){
        session_destroy();
        return redirect()->route('site.principal');
    }
}
