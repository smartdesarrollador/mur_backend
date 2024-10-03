<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderComentario;
use App\Http\Requests\SliderComentarioRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SliderComentarioController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/slider_comentario';
        $this->urlAssetsProd = config('myconfig.url_upload_slider_comentario');
        /* $this->urlAssetsProd = '/home1/iatecdigital/back.iatecdigital.com/assets/imagen/testimonio'; */
    }

   public function index()
    {
        $slider_comentario = SliderComentario::all();
        return response()->json($slider_comentario, Response::HTTP_OK);
    }

    public function store(SliderComentarioRequest $request)
    {
        $slider_comentario=SliderComentario::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$slider_comentario
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $slider_comentario = SliderComentario::find($id);

        if (!$slider_comentario) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($slider_comentario, 200);
    }

    public function update(SliderComentarioRequest $request,$id){
        $id=SliderComentario::find($id);
        $id->update($request->only('nombre','descripcion','precio'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    public function destroy($id){
        $id=SliderComentario::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

     public function file(Request $request)
    {
        $slider_comentario= new SliderComentario();

        if ($request->hasFile('imagen')) {

            $titulo = $request->input('titulo');
            $descripcion = $request->input('descripcion');
            
            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

            $slider_comentario->titulo = $titulo;
            $slider_comentario->descripcion = $descripcion;
            $slider_comentario->imagen = $compPic;
            $slider_comentario->ruta_imagen = $this->urlAssets.'/'.$compPic; 
            /* $slider_comentario->maestro = $maestro; */
        }
        if ($slider_comentario->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_slider_comentario');
    $titulo = $request->input('titulo');
    $descripcion = $request->input('descripcion');

    $slider_comentario = SliderComentario::find($id);

    if (!$slider_comentario) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);
 
        if ($slider_comentario->imagen) {
            $this->deleteFile($slider_comentario->imagen);
        }

        $slider_comentario->titulo = $titulo;
        $slider_comentario->descripcion = $descripcion;
        $slider_comentario->imagen = $compPic;
        $slider_comentario->ruta_imagen = $this->urlAssets.'/'.$compPic;
        /* $slider_comentario->maestro = $maestro; */

    }else{
         $slider_comentario->titulo = $titulo;
        $slider_comentario->descripcion = $descripcion;
    }

    if ($slider_comentario->save()) {
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
        $slider_comentario=SliderComentario::find($id);
        $this->deleteFile($slider_comentario->imagen);
        $slider_comentario->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
