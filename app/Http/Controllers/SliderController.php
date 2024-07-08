<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;
use App\Http\Requests\SliderRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/carousel';
        $this->urlAssetsProd = config('myconfig.url_upload_carousel');
        /* $this->urlAssetsProd = '/home1/iatecdigital/back.iatecdigital.com/assets/imagen/carousel'; */
    }

   public function index()
    {
        $sliders = Slider::all();
        return response()->json($sliders, Response::HTTP_OK);
    }

    public function store(SliderRequest $request)
    {
        $sliders=Slider::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$sliders
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $slider = Slider::find($id);

        if (!$slider) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($slider, 200);
    }

    public function update(SliderRequest $request,$id){
        $id=Slider::find($id);
        $id->update($request->only('nombre','descripcion','precio'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    public function destroy($id){
        $id=Slider::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

     public function file(Request $request)
    {
        $slider= new Slider();

        if ($request->hasFile('imagen')) {

            $titulo = $request->input('titulo');
            $descripcion = $request->input('descripcion');
            
            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

            $slider->titulo = $titulo;
            $slider->descripcion = $descripcion;
            $slider->imagen = $compPic;
            $slider->ruta_imagen = $this->urlAssets.'/'.$compPic; 
            /* $slider->maestro = $maestro; */
        }
        if ($slider->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_slider');
    $titulo = $request->input('titulo');
    $descripcion = $request->input('descripcion');

    $slider = Slider::find($id);

    if (!$slider) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);
 
        if ($slider->imagen) {
            $this->deleteFile($slider->imagen);
        }

        $slider->titulo = $titulo;
        $slider->descripcion = $descripcion;
        $slider->imagen = $compPic;
        $slider->ruta_imagen = $this->urlAssets.'/'.$compPic;
        /* $slider->maestro = $maestro; */

    }else{
         $slider->titulo = $titulo;
        $slider->descripcion = $descripcion;
    }

    if ($slider->save()) {
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
        $slider=Slider::find($id);
        $this->deleteFile($slider->imagen);
        $slider->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
