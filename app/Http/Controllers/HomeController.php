<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dataUser = Auth::user();
        //$dataUser = $request->user();
        return view('home', compact(['dataUser']));
    }


    /////FALTA MODIFICAR EL UPTDATE Y CREAR LAS RUTAS
        public function updateUser(Request $request, $id)
        {
          //dd($id);
          //dd($request);

                      // Validación de Campos
          $request->validate([
             'name' => 'required|string|max:191',
             'last_name' => 'required|string|max:191',
             'address' => 'required|string|max:191',
          ], [
             'name.required' => 'Es obligatorio ingresar el nombre',
             'last_name.required' => 'Es obligatorio ingresar el apellido',    //
             'address.required' => 'Es obligatorio ingresar la direccion',
          ]);

          $userToUpdate = User::find($id);

          $userToUpdate->name = $request->input('name');
          $userToUpdate->last_name = $request->input('last_name');
          $userToUpdate->address = $request->input('address');
          $userToUpdate->country = $request->input('country');
          $userToUpdate->state = $request->input('prov');
          $userToUpdate->save();
        //  ------------------------------------------------------
        //   $ruta = $request->file("photo")->store("public");
        //   $nombreArchivo = basename($ruta);
        //
        //   $productToUpdate->photo = $nombreArchivo;
        //  -----------------------------------------------------
        //
        //
        return redirect('/home');
        }

}
