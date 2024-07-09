<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Requests\ProductoRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/producto';
        $this->urlAssetsProd = config('myconfig.url_upload_producto');
        /* $this->urlAssetsProd = '/home1/iatecdigital/back.iatecdigital.com/assets/imagen/producto'; */
    }

   public function index()
    {
        $productos = Producto::all();
        return response()->json($productos, Response::HTTP_OK);
    }

    public function obtenerCursos()
    {
        $productos = DB::table('productos')
            ->where('categoria_producto_id', 1)
            ->get();

        return response()->json($productos);
    }

    public function obtenerEspecialidades()
    {
        $productos = DB::table('productos')
            ->where('categoria_producto_id', 2)
            ->get();

        return response()->json($productos);
    }

    public function obtenerDestacados()
    {
        $productos = DB::table('productos')
            ->where('destacado', 'true')
            ->get();

        return response()->json($productos);
    }

    public function store(ProductoRequest $request)
    {
        $productos=Producto::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$productos
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $producto = Producto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($producto, 200);
    }

    public function update(ProductoRequest $request,$id){
        $id=Producto::find($id);
        $id->update($request->only('nombre','descripcion','precio'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    public function destroy($id){
        $id=Producto::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

     public function file(Request $request)
    {
        $producto= new Producto();

        if ($request->hasFile('imagen')) {

            $nombre = $request->input('nombre');
            $resumen = $request->input('resumen');
            $descripcion = $request->input('descripcion');
            $correo = $request->input('correo');
            /* $maestro = $request->input('maestro'); */
            $telefono = $request->input('telefono');
            
            $categoria_producto_id = $request->input('categoria_producto_id');

            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

            $producto->nombre = $nombre;
            $producto->resumen = $resumen;
            $producto->descripcion = $descripcion;
            $producto->correo = $correo;
            $producto->telefono = $telefono;
            $producto->imagen = $compPic;
            $producto->ruta_imagen = $this->urlAssets.'/'.$compPic; 
            /* $producto->maestro = $maestro; */
            $producto->categoria_producto_id = $categoria_producto_id;
        }
        if ($producto->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_producto');
    $nombre = $request->input('nombre');
    $resumen = $request->input('resumen');
    $descripcion = $request->input('descripcion');
    $correo = $request->input('correo');
    /* $maestro = $request->input('maestro'); */
    $telefono = $request->input('telefono');
    $categoria_producto_id = $request->input('categoria_producto_id');

    $producto = Producto::find($id);

    if (!$producto) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);
 
        if ($producto->imagen) {
            $this->deleteFile($producto->imagen);
        }

        $producto->nombre = $nombre;
        $producto->resumen = $resumen;
        $producto->descripcion = $descripcion;
        $producto->correo = $correo;
        $producto->telefono = $telefono;
        $producto->imagen = $compPic;
        $producto->ruta_imagen = $this->urlAssets.'/'.$compPic;
        /* $producto->maestro = $maestro; */
        $producto->categoria_producto_id = $categoria_producto_id;

    }else{
         $producto->nombre = $nombre;
         $producto->resumen = $resumen;
        $producto->descripcion = $descripcion;
        $producto->correo = $correo;
        /* $producto->maestro = $maestro; */
        $producto->telefono = $telefono;
        
        $producto->categoria_producto_id = $categoria_producto_id;
    }

    if ($producto->save()) {
        return ['status' => true, 'message' => 'Datos actualizados con exito'];
    } else {
        return ['status' => false, 'message' => 'Something Went Wrong'];
    }
}

// Eliminar imagen de carpeta de imagenes
    public function deleteFile($fileName)
{
    $filePath = $this->urlAssetsProd . '/' . $fileName;
    //$filePath = public_path($this->urlAssets .'/'. $fileName);

    
    if (file_exists($filePath)) {
        
        if (unlink($filePath)) {
            return true; 
            return false; 
        }
    } else {
        return true; 
    }
}

public function destroyFile($id){
        $producto=Producto::find($id);
        $this->deleteFile($producto->imagen);
        $producto->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
