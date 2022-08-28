<?php
 
namespace App\Http\Controllers\v1;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Controllers\Controller;


 
class ClientesController extends Controller
    {
        
        public function getclientes()
        {

            $response=new \stdclass();
            $response->suscess=true;
            $response->data=Cliente::all();
            return response()->json($response,200);
        }
        public function store(Request $request)
            {
                $response=new \stdclass();
                $cliente=new cliente();
                $cliente->codigo=$request->codigo;
                $cliente->nombre=$request->nombre;
                $cliente->email=$request->email;
                $cliente->save();

                $response->success=true;
                $response->data=$cliente;

                return response()->json($response,200);

            
            }
        public function update(Request $request,$id)
            {
                $response=new \stdclass();
             
                
                $cliente=Cliente::find($id);
                
                $cliente->codigo=$request->codigo;
                $cliente->nombre=$request->nombre;
                $cliente->email=$request->email;
                
                $cliente->save();

                $response->success=true;
                $response->data=$cliente;

                return response()->json($response,200);

            
            }
            public function patchUpdate(Request $request,$id)
            {
                $response=new \stdclass();
                             
                $cliente=Ciente::find($id);
                
                if ($request->codigo!=null) {
                    $cliente->codigo=$request->codigo;
                }
                
                if ($request->nombre!=null) {
                    $cliente->nombre=$request->nombre;
                }
                  
               if ($request->email!=null) {
                   $cliente->email=$request->email;
               }
                 
                



                $cliente->save();

                $response->success=true;
                $response->data=$cliente;

                return response()->json($response,200);

            
            }



            public function delete($id)
            {
                $response=new \stdclass();
             
                
                $cliente=Cliente::find($id);
                
                $cliente->delete();

                $response->success=true;
             

                return response()->json($response,200);

            
            }
              public function getitem($id)
            {
                $response=new \stdclass();
             
                
                $cliente=Cliente::find($id);
                
                $response->success=true;
                $response->data=$cliente;
             
                return response()->json($response,200);

            
            }
        }