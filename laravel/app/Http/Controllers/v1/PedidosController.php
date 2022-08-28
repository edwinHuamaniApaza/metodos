<?php
 
namespace App\Http\Controllers\v1;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Http\Controllers\Controller;


 
class PedidosController extends Controller
    {
        
        public function getPedidos()
        {

            $response=new \stdclass();
            $response->suscess=true;
            $response->data=Pedido::all();
            return response()->json($response,200);
        }
        public function store(Request $request)
            {
                $response=new \stdclass();
                $pedido=new pedido();
                $pedido->cliente=$request->cliente;
                $pedido->orden=$request->orden;
                $pedido->estatus=$request->estatus;
                $pedido->precio=$request->precio;
                $pedido->fecha=$request->fecha;
              


                $pedido->save();

                $response->success=true;
                $response->data=$pedido;

                return response()->json($response,200);

            
            }
        public function update(Request $request,$id)
            {
                $response=new \stdclass();
             
                
                $pedido=Pedido::find($id);
                
                              
                $pedido->cliente=$request->cliente;
                $pedido->orden=$request->orden;
                $pedido->estatus=$request->estatus;
                $pedido->precio=$request->precio;
                $pedido->fecha=$request->fecha;   

                $pedido->save();

                $response->success=true;
                $response->data=$pedido;

                return response()->json($response,200);

            
            }
            public function patchUpdate(Request $request,$id)
            {
                $response=new \stdclass();
                             
                $pedido=Pedido::find($id);

                
                if ($request->cliente!=null) {
                    $pedido->cliente=$request->cliente;
                }
                
                if ($request->orden!=null) {
                     $pedido->orden=$request->orden;
                }
                  
               if ($request->estatus!=null) {
                   $pedido->estatus=$request->estatus;
               }
                 
                if ($request->precio!=null) {
                    $pedido->precio=$request->precio;
                }
                
                if ($request->fecha!=null) {
                    $pedido->fecha=$request->fecha;
                }
                  
             
                



                $cliente->save();

                $response->success=true;
                $response->data=$pedido;

                return response()->json($response,200);

            
            }



            public function delete($id)
            {
                $response=new \stdclass();
             
                
                $pedido=Pedido::find($id);
                
                $pedido->delete();

                $response->success=true;
             

                return response()->json($response,200);

            
            }
              public function getitem($id)
            {
                $response=new \stdclass();
             
                
                $pedido=Pedido::find($id);
                
                $response->success=true;
                $response->data=$pedido;
             
                return response()->json($response,200);

            
            }
        }