<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Http\Requests\BannerRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
   private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/banner';
        $this->urlAssetsProd = config('myconfig.url_upload_banner');
        /* $this->urlAssetsProd = '/home1/iatecdigital/back.iatecdigital.com/assets/imagen/banner'; */
    }

   public function index()
    {
        $banners = Banner::all();
        return response()->json($banners, Response::HTTP_OK);
    }

    public function store(BannerRequest $request)
    {
        $banners=Banner::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$banners
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $banner = Banner::find($id);

        if (!$banner) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($banner, 200);
    }

    public function update(BannerRequest $request,$id){
        $id=Banner::find($id);
        $id->update($request->only('nombre','descripcion','precio'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    public function destroy($id){
        $id=Banner::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

     public function file(Request $request)
    {
        $banner= new Banner();

        if ($request->hasFile('imagen')) {

            $titulo = $request->input('titulo');
            $descripcion = $request->input('descripcion');
            
            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

            $banner->titulo = $titulo;
            $banner->descripcion = $descripcion;
            $banner->imagen = $compPic;
            $banner->ruta_imagen = $this->urlAssets.'/'.$compPic; 
            /* $banner->maestro = $maestro; */
        }
        if ($banner->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_banner');
    $titulo = $request->input('titulo');
    $descripcion = $request->input('descripcion');

    $banner = Banner::find($id);

    if (!$banner) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);
 
        if ($banner->imagen) {
            $this->deleteFile($banner->imagen);
        }

        $banner->titulo = $titulo;
        $banner->descripcion = $descripcion;
        $banner->imagen = $compPic;
        $banner->ruta_imagen = $this->urlAssets.'/'.$compPic;
        /* $banner->maestro = $maestro; */

    }else{
         $banner->titulo = $titulo;
        $banner->descripcion = $descripcion;
    }

    if ($banner->save()) {
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
        $banner=Banner::find($id);
        $this->deleteFile($banner->imagen);
        $banner->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
