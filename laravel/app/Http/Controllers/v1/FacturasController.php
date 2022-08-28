<?php
 
namespace App\Http\Controllers\v1;
use Illuminate\Http\Request;
use App\Models\Factura;
use App\Http\Controllers\Controller;


 
class FacturasController extends Controller
    {
        
        public function getFacturas()
        {

            $response=new \stdclass();
            $response->suscess=true;
            $response->data=Factura::all();
            return response()->json($response,200);
        }
        public function store(Request $request)
            {
                $response=new \stdclass();
                $factura=new factura();
                $factura->fecha_creacion=$request->fecha_creacion;
                $factura->estado=$request->estado;
                $factura->fecha_pago=$request->fecha_pago;
                $factura->metodo=$request->metodo;
                $factura->monto=$request->monto;
              


                $factura->save();

                $response->success=true;
                $response->data=$factura;

                return response()->json($response,200);

            
            }
        public function update(Request $request,$id)
            {
                $response=new \stdclass();
             
                
                $factura=Pedido::find($id);
                
                              
                $factura->fecha_creacion=$request->fecha_creacion;
                $factura->estado=$request->estado;
                $factura->fecha_pago=$request->fecha_pago;
                $factura->metodo=$request->metodo;
                $factura->monto=$request->monto; 

                $factura->save();

                $response->success=true;
                $response->data=$factura;

                return response()->json($response,200);

            
            }
            public function patchUpdate(Request $request,$id)
            {
                $response=new \stdclass();
                             
                $factura=Factura::find($id);

                
                if ($request->fecha_creacion!=null) {
                    $factura->fecha_creacion=$request->fecha_creacion;
                }
                
                if ($request->estado!=null) {
                     $factura->estado=$request->estado;
                }
                  
               if ($request->fecha_pago!=null) {
                   $factura->fecha_pago=$request->fecha_pago;
               }
                 
                if ($request->metodo!=null) {
                    $factura->metodo=$request->metodo;
                }
                
                if ($request->monto!=null) {
                    $factura->monto=$request->monto;
                }
                  
             
                



                $factura->save();

                $response->success=true;
                $response->data=$factura;

                return response()->json($response,200);

            
            }



            public function delete($id)
            {
                $response=new \stdclass();
             
                
                $factura=Factura::find($id);
                
                $factura->delete();

                $response->success=true;
             

                return response()->json($response,200);

            
            }
              public function getitem($id)
            {
                $response=new \stdclass();
             
                
                $factura=Factura::find($id);
                
                $response->success=true;
                $response->data=$factura;
             
                return response()->json($response,200);

            
            }
        }