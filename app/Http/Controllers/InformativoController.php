<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informativo;
use App\Http\Requests\InformativoRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class InformativoController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/informativo';
        $this->urlAssetsProd = config('myconfig.url_upload_informativo');
    }

   public function index()
    {
        $informativos = Informativo::all();
        return response()->json($informativos, Response::HTTP_OK);
    }

    


    public function obtenerDestacados()
    {
        $informativos = DB::table('informativos')
            ->where('destacado', 'true')
            ->get();

        return response()->json($informativos);
    }

    public function store(InformativoRequest $request)
    {
        $informativos=Informativo::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$informativos
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $informativo = Informativo::find($id);

        if (!$informativo) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($informativo, 200);
    }

    public function update(InformativoRequest $request,$id){
        $id=Informativo::find($id);
        $id->update($request->only('nombre','descripcion','precio'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    public function destroy($id){
        $id=Informativo::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

     public function file(Request $request)
    {
        $informativo= new Informativo();

        if ($request->hasFile('imagen')) {

            $titulo = $request->input('titulo');
            $resumen = $request->input('resumen');
            $descripcion = $request->input('descripcion');
            $fuente = $request->input('fuente');
            $autor = $request->input('autor');
            $destacado = $request->input('destacado');

            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

            $informativo->titulo = $titulo;
            $informativo->resumen = $resumen;
            $informativo->descripcion = $descripcion;
            $informativo->fuente = $fuente;
            $informativo->imagen = $compPic;
            $informativo->ruta_imagen = $this->urlAssets.'/'.$compPic; 
            $informativo->autor = $autor;
            $informativo->destacado = $destacado;
        }
        if ($informativo->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_informativo');
    $titulo = $request->input('titulo');
    $resumen = $request->input('resumen');
    $descripcion = $request->input('descripcion');
    $fuente = $request->input('fuente');
    $autor = $request->input('autor');
    $destacado = $request->input('destacado');

    $informativo = Informativo::find($id);

    if (!$informativo) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);
 
        if ($informativo->imagen) {
            $this->deleteFile($informativo->imagen);
        }

        $informativo->titulo = $titulo;
        $informativo->resumen = $resumen;
        $informativo->descripcion = $descripcion;
        $informativo->fuente = $fuente;
        $informativo->imagen = $compPic;
        $informativo->ruta_imagen = $this->urlAssets.'/'.$compPic;
        $informativo->autor = $autor;
        $informativo->destacado = $destacado;
    }else{
         $informativo->titulo = $titulo;
         $informativo->resumen = $resumen;
        $informativo->descripcion = $descripcion;
        $informativo->fuente = $fuente;
        $informativo->autor = $autor;
        $informativo->destacado = $destacado;
    }

    if ($informativo->save()) {
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
        $informativo=Informativo::find($id);
        $this->deleteFile($informativo->imagen);
        $informativo->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
