<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos_aforo;

class DatosController extends Controller{


public function  index(){
    
$data_aforo = Datos_Aforo :: all();
return response ()->json($data_aforo);

}


public function guardar (Request $request){


    $datos = new Datos_aforo;

    $datos->fecha=$request-> fecha;
    $datos->hora=$request->hora;
    $datos->clima=$request->clima;
    $datos->observador=$request->observador;
    $datos->sitio_conteo=$request->sitio_conteo;
    $datos->sentido_transito=$request->sentido_transito;
    $datos->supervisor=$request->supervisor;
    $datos->id_carril=$request->id_carril;

    $datos->save();

    return response()->json($request);

}

public function mostrar ($id){

    $datos =new Datos_aforo;
    $datosencontrados=$datos->find($id);

        return response()->json($datosencontrados);

}

public function eliminar($id){
$datos = Datos_aforo::find($id);

$datos->delete();


return response()->json("registro borrado");

}


public function actualizar(Request $request, $id){

  /*  $datos = Datos_aforo::find($id);
    $datos->save();
    return response()->json("datos actualizados");
*/

    $registry = Datos_aforo::find($id);
      

     

          $registry->fecha = $request->input('fecha');
          $registry->hora =   $request->input('hora');
          $registry->clima =  $request->input('clima');
          $registry->observador =  $request->input('observador');
          $registry->sitio_conteo = $request->input('sitio_conteo');
          $registry->sentido_transito =  $request->input('sentido_transito');
          $registry->supervisor =  $request->input('supervisor');
          $registry->id_carril =  $request->input('id_carril');



        /*  if (!empty($request->input('fecha'))) {
            $registry->title = $request->input('fecha');
        }
*/           


          $registry->save();
          
  
          return response()->json('Registro actualizado');
          

}





}