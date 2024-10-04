<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderReconocimiento;
use App\Http\Requests\SliderReconocimientoRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SliderReconocimientoController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/slider/reconocimiento';
        $this->urlAssetsProd = config('myconfig.url_upload_slider_reconocimiento');
        /* $this->urlAssetsProd = '/home1/iatecdigital/back.iatecdigital.com/assets/imagen/testimonio'; */
    }

   public function index()
    {
        $slider_reconocimiento = SliderReconocimiento::all();
        return response()->json($slider_reconocimiento, Response::HTTP_OK);
    }

    public function store(SliderReconocimientoRequest $request)
    {
        $slider_reconocimiento=SliderReconocimiento::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$slider_reconocimiento
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $slider_reconocimiento = SliderReconocimiento::find($id);

        if (!$slider_reconocimiento) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($slider_reconocimiento, 200);
    }

    public function update(SliderReconocimientoRequest $request,$id){
        $id=SliderReconocimiento::find($id);
        $id->update($request->only('nombre','descripcion','precio'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    public function destroy($id){
        $id=SliderReconocimiento::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

     public function file(Request $request)
    {
        $slider_reconocimiento= new SliderReconocimiento();

        if ($request->hasFile('imagen')) {

            $titulo = $request->input('titulo');
            $descripcion = $request->input('descripcion');
            
            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

            $slider_reconocimiento->titulo = $titulo;
            $slider_reconocimiento->descripcion = $descripcion;
            $slider_reconocimiento->imagen = $compPic;
            $slider_reconocimiento->ruta_imagen = $this->urlAssets.'/'.$compPic; 
            /* $slider_reconocimiento->maestro = $maestro; */
        }
        if ($slider_reconocimiento->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_slider_reconocimiento');
    $titulo = $request->input('titulo');
    $descripcion = $request->input('descripcion');

    $slider_reconocimiento = SliderReconocimiento::find($id);

    if (!$slider_reconocimiento) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);
 
        if ($slider_reconocimiento->imagen) {
            $this->deleteFile($slider_reconocimiento->imagen);
        }

        $slider_reconocimiento->titulo = $titulo;
        $slider_reconocimiento->descripcion = $descripcion;
        $slider_reconocimiento->imagen = $compPic;
        $slider_reconocimiento->ruta_imagen = $this->urlAssets.'/'.$compPic;
        /* $slider_reconocimiento->maestro = $maestro; */

    }else{
         $slider_reconocimiento->titulo = $titulo;
        $slider_reconocimiento->descripcion = $descripcion;
    }

    if ($slider_reconocimiento->save()) {
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
        $slider_reconocimiento=SliderReconocimiento::find($id);
        $this->deleteFile($slider_reconocimiento->imagen);
        $slider_reconocimiento->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
