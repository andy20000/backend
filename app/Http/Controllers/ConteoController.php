<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conteo_vehicular;

class ConteoController extends Controller{


    public function  index(){
    
        $datos = Conteo_vehicular :: all();
        return response ()->json($datos);
        
        }
        
        
        public function guardar (Request $request){
        

         
        
            $datos = new Conteo_vehicular;
        
            $datos->autos=$request-> autos;
            $datos->mio_articulados=$request->mio_articulados;
            $datos->mio_padrones=$request->mio_padrones;
            $datos->mio_alimentador=$request->mio_alimentador;
            $datos->buses=$request->buses;
            $datos->busetas=$request->busetas;
            $datos->motos=$request->motos;
            $datos->caminones_c2p=$request->caminones_c2p;
            $datos->caminones_c2g=$request->caminones_c2g;
            $datos->caminones_c3=$request->caminones_c3;
            $datos->camiones_c4=$request->camiones_c4;
            $datos->camiones_c5=$request->camiones_c5;
            $datos->camiones_c5_mayoresque=$request->camiones_c5_mayoresque;
            $datos->bicicletas=$request->bicicletas;

        
            $datos->save();
        
            return response()->json($request);
        
        }
        
        public function mostrar ($id){
        
            $datos =new Conteo_vehicular;
            $datosencontrados=$datos->find($id);
        
                return response()->json($datosencontrados);
        
        }
        
        public function eliminar($id){
        $datos = Conteo_vehicular::find($id);
        
        $datos->delete();
        
        
        return response()->json("registro borrado");
        
        }
        
        
        public function actualizar(Request $request, $id){
        
          /*  $datos = Datos_aforo::find($id);
            $datos->save();
            return response()->json("datos actualizados");
        */
        
            $datos = Conteo_vehicular::find($id);
              
        
             
            $datos->autos=$request-> input('autos');
            $datos->mio_articulados=$request->input('mio_articulados');
            $datos->mio_padrones=$request->input('mio_padrones');
            $datos->mio_alimentador=$request->input('mio_alimentador');
            $datos->buses=$request->input('buses');
            $datos->busetas=$request->input('busetas');
            $datos->motos=$request->input('motos');
            $datos->caminones_c2p=$request->input('caminones_c2p');
            $datos->caminones_c2g=$request->input('caminones_c2g');
            $datos->caminones_c3=$request->input('caminones_c3');
            $datos->camiones_c4=$request->input('camiones_c4');
            $datos->camiones_c5=$request->input('camiones_c5');
            $datos->camiones_c5_mayoresque=$request->input('camiones_c5_mayoresque');
            $datos->bicicletas=$request->input('bicicletas');      
           
                          
        
                  $datos->save();
                  
          
                  return response()->json('Registro actualizado');
                  
        
        }
        
        
        

}