<?php
 
namespace App\Http\Controllers\v1;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Controllers\Controller;


 
class ProductosController extends Controller
    {
        
        public function getproductos()
        {

            $response=new \stdclass();
            $response->suscess=true;
            $response->data=Producto::all();
            return response()->json($response,200);
        }
        public function store(Request $request)
            {
                $response=new \stdclass();
                $producto=new producto();
                $producto->codigo=$request->codigo;
                $producto->nombre=$request->nombre;
                $producto->save();

                $response->success=true;
                $response->data=$producto;

                return response()->json($response,200);

            
            }
        public function update(Request $request,$id)
            {
                $response=new \stdclass();
             
                
                $producto=Producto::find($id);
                
                $producto->codigo=$request->codigo;
                $producto->nombre=$request->nombre;
                
                $producto->save();

                $response->success=true;
                $response->data=$producto;

                return response()->json($response,200);

            
            }
            public function delete($id)
            {
                $response=new \stdclass();
             
                
                $producto=Producto::find($id);
                
                $producto->delete();

                $response->success=true;
             

                return response()->json($response,200);

            
            }
    }