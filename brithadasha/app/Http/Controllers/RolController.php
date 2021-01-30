<?php

namespace App\Http\Controllers;
use App\Rol;
use App\Rol_User;
use App\User;
use App\Auth;
use Illuminate\Http\Request;

class RolController extends Controller
{
    //
   public function index(){
/*OBTENGO LOS SERVICIOS DEL USUARIO IDENTIFICADO*/
    $servicios = Rol_User::with('getRol');

       return view('/myrol', [
           'servicios' => $servicios
       ]);
   }
/*OBTENGO A LOS USUARIOS CON SUS SERVICIOS*/
   public function adminIndexUsers(){
       if(auth()->user()->user_isAdmin){

            $users = User::with('getRols')->get();
            //dd($users);
           return view('adminUserRols',[
                'users' => $users
           ]);
       }
   }
   /*OBTENGO LOS SERVICIOS CREEADOS Y EL CRUD*/
   public function adminIndex(){
       if(auth()->user()->user_isAdmin){
           $servicios = Rol::all();
          // dd($servicios);

           return view('adminServicios',[
               'servicios' => $servicios
           ]);
       }

   }
   /*CREO NUEVOS SERVICIOS*/
    public function store(Request $request){

    $servicio = new Rol();

        $validacion = $request->validate([
            'rol_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = 'noDisponible.png';
        if ($request->file('rol_img')) {
            $imageName = time().'.'.request()->rol_img->getClientOriginalExtension();
            $imagen = $request->file('rol_img');
            $imagen->getClientOriginalExtension();
            $imageName = $request->rol_img->getClientOriginalName();
            $request->rol_img->move(public_path('images/servicios'), $imageName);
        }
    //dd($imageName);
    $servicio->rol_name = request('rol_name');
    $servicio->rol_description = request('rol_description');
    $servicio->rol_img = $imageName;
    $servicio->save();
    return redirect('admin/servicios/index')->with('mensaje', 'Servicio '.$servicio->rol_name.' agregado con éxito');

       }

}
