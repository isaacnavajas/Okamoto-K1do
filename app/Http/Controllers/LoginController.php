<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Mail\formualarioMail;
use Illuminate\Support\Facades\Mail;


cLass LoginController extends Controller
{
    

    public function register (Request $request) {
        //Validar los datos y mensajes de errores 
        $rules = [
            'email' => 'required|unique:users',
            'password' => 'required|min:8|max:20',
            'name' => 'required',
        ];
        $messages = [
            'email.required' => 'El campo Email es obligatorio.',
            'email.unique' => 'El correo tiene que ser unico, ya existe una cuenta con este correo.',
            'password.required' =>'El campo de password es obligatorio.',
            'password.min' => 'El campo password no puede tener menos de 8 caracteres.',
            'password.max' => 'El campo password no puede tener mas de 20 caracteres.',
            'name.required' => 'El campo nombre es obligatorio.'
        ];
        $this->validate($request, $rules, $messages);



        //enviar el formulario
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        //if($user->email==$request->email ){return redirect(route('privada'));}

        Auth::login($user);
        return redirect(route("mi-cuenta"));

    }


    public function login (Request $request) {
         //Validar los datos y mensajes de errores 
         $rules = [
            'email' => 'required|exists:users,email',
            'password' => 'required|min:8|max:20',
        ];
        $messages = [
            'email.exists' => 'El email no existe.',
            'email.required' => 'El campo Email es obligatorio.',
            'password.required' =>'El campo de contraseña es obligatorio.',
            'password.min' => 'El campo contraseña no puede tener menos de 8 caracteres.',
            'password.max' => 'El campo contraseña no puede tener mas de 20 caracteres.',
        ];
        $this->validate($request, $rules, $messages);


        //Validación
        $credentials=[
            "email" => $request->email,
            "password" => $request->password,
        ];
        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials, $remember)){//aqui te va a llevar una vez registrado.
            $request->session()->regenerate();
            return redirect()->intended(route("mi-cuenta")); 
        }
        else{
            return redirect('mi-cuenta');
        }
    
    }


    public function logout (Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }



    public function sendFrom (Request $request) {
        $data=new formualarioMail($request->all());
        Mail::to("okamotokidoilerna99@gmail.com")->send($data);

        return redirect(route('contacto'))->with('info', 'Mensaje enviado');
    }

}