<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderMiembro;
use App\Http\Requests\SliderMiembroRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SliderMiembroController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/slider/miembro';
        $this->urlAssetsProd = config('myconfig.url_upload_slider_miembro');
        /* $this->urlAssetsProd = '/home1/iatecdigital/back.iatecdigital.com/assets/imagen/testimonio'; */
    }

   public function index()
    {
        $slider_miembro = SliderMiembro::all();
        return response()->json($slider_miembro, Response::HTTP_OK);
    }

    public function store(SliderMiembroRequest $request)
    {
        $slider_miembro=SliderMiembro::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$slider_miembro
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $slider_miembro = SliderMiembro::find($id);

        if (!$slider_miembro) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($slider_miembro, 200);
    }

    public function update(SliderMiembroRequest $request,$id){
        $id=SliderMiembro::find($id);
        $id->update($request->only('nombre','descripcion','precio'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    public function destroy($id){
        $id=SliderMiembro::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

     public function file(Request $request)
    {
        $slider_miembro= new SliderMiembro();

        if ($request->hasFile('imagen')) {

            $titulo = $request->input('titulo');
            $descripcion = $request->input('descripcion');
            
            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

            $slider_miembro->titulo = $titulo;
            $slider_miembro->descripcion = $descripcion;
            $slider_miembro->imagen = $compPic;
            $slider_miembro->ruta_imagen = $this->urlAssets.'/'.$compPic; 
            /* $slider_miembro->maestro = $maestro; */
        }
        if ($slider_miembro->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_slider_miembro');
    $titulo = $request->input('titulo');
    $descripcion = $request->input('descripcion');

    $slider_miembro = SliderMiembro::find($id);

    if (!$slider_miembro) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);
 
        if ($slider_miembro->imagen) {
            $this->deleteFile($slider_miembro->imagen);
        }

        $slider_miembro->titulo = $titulo;
        $slider_miembro->descripcion = $descripcion;
        $slider_miembro->imagen = $compPic;
        $slider_miembro->ruta_imagen = $this->urlAssets.'/'.$compPic;
        /* $slider_miembro->maestro = $maestro; */

    }else{
         $slider_miembro->titulo = $titulo;
        $slider_miembro->descripcion = $descripcion;
    }

    if ($slider_miembro->save()) {
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
        $slider_miembro=SliderMiembro::find($id);
        $this->deleteFile($slider_miembro->imagen);
        $slider_miembro->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
