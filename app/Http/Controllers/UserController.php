<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Rol;
use App\Models\Permiso;

/* 8.- LOGIN_REGISTER_BASICO-V1-P1 */
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTExceptions;
/* /8.- LOGIN_REGISTER_BASICO-V1-P1 */

class UserController extends Controller
{
    /* 9.- LOGIN_REGISTER_BASICO-V1-P1 */
    public function register(Request $request){
$user = User::where('email',$request['email'])->first();

if($user){
    $response['status'] = 0;
        $response['message'] = 'El Email ya existe';
        $response['code'] = 200;
}else{
$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $response['status'] = 1;
        $response['message'] = 'Usuario registrado exitosamente';
        $response['code'] = 200;
}

        
        return response()->json($response);
    }
     

    public function login(Request $request){
        $credentials = $request->only('email','password');

         try{
if(!JWTAuth::attempt($credentials)){
    $response['status'] = 0;
        $response['code'] = 401;
        $response['data'] = null;
        $response['message'] = 'El correo o la contraseña son incorrectos';
        return response()->json($response);
}
        }catch(JWTException $e){
            $response['data'] = null;
        $response['code'] = 500;
        $response['message'] = 'No se pudo crear el token';
        return response()->json($response);
        }

        $user = auth()->user();
        $usuario = User::find($user->id);
        $roles = $usuario->rol()->pluck('nombre')->toArray(); 

        $data['token'] = auth()->claims([
            'user_id' => $user->id,
            'email' => $user->email,
            'rol' => $roles[0]
        ])->attempt($credentials);

        $response['data'] = $data;
        $response['status'] = 1;
        $response['code'] = 200;
        $response['message'] = 'Inicio de sesión exitosamente';

        return response()->json($response);

    }

    /* /9.- LOGIN_REGISTER_BASICO-V1-P1 */
}
