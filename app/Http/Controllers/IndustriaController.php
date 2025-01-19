<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industria;
use App\Http\Requests\IndustriaRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class IndustriaController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/industrias';
        $this->urlAssetsProd = config('myconfig.url_upload_industrias');
        /* $this->urlAssetsProd = '/home1/iatecdigital/back.iatecdigital.com/assets/imagen/testimonio'; */
    }

   public function index()
    {
        $industria = Industria::all();
        return response()->json($industria, Response::HTTP_OK);
    }

    public function store(IndustriaRequest $request)
    {
        $industria=Industria::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$industria
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $industria = Industria::find($id);

        if (!$industria) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($industria, 200);
    }

    public function update(IndustriaRequest $request,$id){
        $id=Industria::find($id);
        $id->update($request->only('nombre','descripcion','precio'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    public function destroy($id){
        $id=Industria::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

     public function file(Request $request)
    {
        $industria= new Industria();

        if ($request->hasFile('imagen')) {

            $titulo = $request->input('titulo');
            $descripcion = $request->input('descripcion');
            
            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

            $industria->titulo = $titulo;
            $industria->descripcion = $descripcion;
            $industria->imagen = $compPic;
            $industria->ruta_imagen = $this->urlAssets.'/'.$compPic; 
            /* $industria->maestro = $maestro; */
        }
        if ($industria->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_industria');
    $titulo = $request->input('titulo');
    $descripcion = $request->input('descripcion');

    $industria = Industria::find($id);

    if (!$industria) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);
 
        if ($industria->imagen) {
            $this->deleteFile($industria->imagen);
        }

        $industria->titulo = $titulo;
        $industria->descripcion = $descripcion;
        $industria->imagen = $compPic;
        $industria->ruta_imagen = $this->urlAssets.'/'.$compPic;
        /* $industria->maestro = $maestro; */

    }else{
         $industria->titulo = $titulo;
        $industria->descripcion = $descripcion;
    }

    if ($industria->save()) {
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
        $industria=Industria::find($id);
        $this->deleteFile($industria->imagen);
        $industria->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
