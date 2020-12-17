<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;




class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
          'name' => 'required|string|max:191',
          'last_name' => 'required|string|max:191',
          'username' => 'required|string|min:5|max:191|unique:users',
          'address' => 'required|string|max:191',
          'email' => 'required|email|max:100|unique:users',
          'password' => 'required|string|min:8|confirmed',
          'avatar' => 'required',
          'country' => 'required'
        ], [
          'name.required' => 'Es obligatorio ingresar el nombre',
          'last_name.required' => 'Es obligatorio ingresar el apellido',
          'username.required' => 'Completar nombre de usuario',
          'username.min' => 'El usuario debe tener 5 carácteres como mínimo',
          'username.unique' => 'Este nombre de usuario no se encuentra disponible',
          'address.required' => 'Es obligatorio ingresar la direccion',
          'email.required' => 'Es necesario un email',
          'email.unique' => 'Esta direccion de mail no se encuentra disponible',
          'password.required' => 'Escriba la Contraseña',
          'password.min' => 'La contraeña necesita un mínimo de 8 carácteres',
          'password.confirmed' => 'Escriba la misma Contraseña en ambos campos',
          'avatar.required' => 'Es obligatorio ingresar una foto de perfil',
          'country.required' => 'Complete el país'
        ]);
}
//no valida strings en nombre y apellido
// css en public, no toma el color rojo de error en la clase invalid feed linea 670 app.css

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
        //  $ruta = file('avatar')->'name';
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'address' => $data['address'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => basename($data['avatar']->store("public")),
            'country' => $data['country'],
            'state' => $data['prov']
        ]);
    }


}
//verificado que guarda la imgen ok, revisar nombre de guardado de la imagen
