<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Testimonio;
use App\Http\Requests\TestimonioRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class TestimonioController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;
    private $urlAssetsBanner;
    private $urlAssetsProdBanner;
    private $urlAssetsImagenUno;
    private $urlAssetsProdImagenUno;
    private $urlAssetsImagenDos;
    private $urlAssetsProdImagenDos;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/testimonio';
        $this->urlAssetsProd = config('myconfig.url_upload_testimonio');
        $this->urlAssetsBanner = 'assets/imagen/testimonio/banner';
        $this->urlAssetsProdBanner = config('myconfig.url_upload_testimonio_banner');
        $this->urlAssetsImagenUno = 'assets/imagen/testimonio/imagen_uno';
        $this->urlAssetsProdImagenUno = config('myconfig.url_upload_testimonio_imagen_uno');
        $this->urlAssetsImagenDos = 'assets/imagen/testimonio/imagen_dos';
        $this->urlAssetsProdImagenDos = config('myconfig.url_upload_testimonio_imagen_dos');
        /* $this->urlAssetsProd = '/home1/iatecdigital/back.iatecdigital.com/assets/imagen/testimonio'; */
    }

   public function index()
    {
        $testimonios = Testimonio::all();
        return response()->json($testimonios, Response::HTTP_OK);
    }

    public function store(TestimonioRequest $request)
    {
        $testimonios=Testimonio::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$testimonios
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $testimonio = Testimonio::find($id);

        if (!$testimonio) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($testimonio, 200);
    }

    public function update(TestimonioRequest $request,$id){
        $id=Testimonio::find($id);
        $id->update($request->only('nombre','descripcion','precio'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    

     public function file(Request $request)
    {
        $testimonio= new Testimonio();

        if ($request->hasFile('imagen') || $request->hasFile('banner') || $request->hasFile('imagen_uno') || $request->hasFile('imagen_dos')) {

            $titulo = $request->input('titulo');
            $descripcion = $request->input('descripcion');
            
            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

           $completeFileNameBanner = $request->file('banner')->getClientOriginalName();
            $fileNameOnlyBanner = pathinfo($completeFileNameBanner, PATHINFO_FILENAME);
            $extenshionBanner = $request->file('banner')->getClientOriginalExtension();
            $compPicBanner = str_replace('', '_', $fileNameOnlyBanner) . '-' . rand() . '_' . time() . '.' . $extenshionBanner;
           $path = $request->file('banner')->move($this->urlAssetsProdBanner, $compPicBanner);

           $completeFileNameImagenUno = $request->file('imagen_uno')->getClientOriginalName();
            $fileNameOnlyImagenUno = pathinfo($completeFileNameImagenUno, PATHINFO_FILENAME);
            $extenshionImagenUno = $request->file('imagen_uno')->getClientOriginalExtension();
            $compPicImagenUno = str_replace('', '_', $fileNameOnlyImagenUno) . '-' . rand() . '_' . time() . '.' . $extenshionImagenUno;
           $path = $request->file('imagen_uno')->move($this->urlAssetsProdImagenUno, $compPicImagenUno);

           $completeFileNameImagenDos = $request->file('imagen_dos')->getClientOriginalName();
            $fileNameOnlyImagenDos = pathinfo($completeFileNameImagenDos, PATHINFO_FILENAME);
            $extenshionImagenDos = $request->file('imagen_dos')->getClientOriginalExtension();
            $compPicImagenDos = str_replace('', '_', $fileNameOnlyImagenDos) . '-' . rand() . '_' . time() . '.' . $extenshionImagenDos;
           $path = $request->file('imagen_dos')->move($this->urlAssetsProdImagenDos, $compPicImagenDos);
           
            $testimonio->titulo = $titulo;
            $testimonio->descripcion = $descripcion;
            $testimonio->imagen = $compPic;
            $testimonio->ruta_imagen = $this->urlAssets.'/'.$compPic;
            $testimonio->banner = $compPicBanner;
            $testimonio->ruta_banner = $this->urlAssetsBanner.'/'.$compPicBanner;  
            $testimonio->imagen_uno = $compPicImagenUno;
            $testimonio->ruta_imagen_uno = $this->urlAssetsImagenUno.'/'.$compPicImagenUno;  
            $testimonio->imagen_dos = $compPicImagenDos;
            $testimonio->ruta_imagen_dos = $this->urlAssetsImagenDos.'/'.$compPicImagenDos;  
            /* $testimonio->maestro = $maestro; */
        }
        if ($testimonio->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_testimonio');
    $titulo = $request->input('titulo');
    $descripcion = $request->input('descripcion');

    $testimonio = Testimonio::find($id);

    if (!$testimonio) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen') || $request->hasFile('banner') || $request->hasFile('imagen_uno') || $request->hasFile('imagen_dos')) {

        if($request->hasFile('imagen')){
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

          if ($testimonio->imagen) {
            $this->deleteFile($testimonio->imagen);
           }

           $testimonio->titulo = $titulo;
        $testimonio->descripcion = $descripcion;
        $testimonio->imagen = $compPic;
        $testimonio->ruta_imagen = $this->urlAssets.'/'.$compPic;
        /* $testimonio->maestro = $maestro; */
        }

       if($request->hasFile('banner')){
         $completeFileNameBanner = $request->file('banner')->getClientOriginalName();
        $fileNameOnlyBanner = pathinfo($completeFileNameBanner, PATHINFO_FILENAME);
        $extensionBanner = $request->file('banner')->getClientOriginalExtension();
        $compPicBanner = str_replace('', '_', $fileNameOnlyBanner) . '-' . rand() . '_' . time() . '.' . $extensionBanner;
         $path = $request->file('banner')->move($this->urlAssetsProdBanner, $compPicBanner);
 
            if ($testimonio->banner) {
                $this->deleteFileBanner($testimonio->banner);
            }

            $testimonio->titulo = $titulo;
        $testimonio->descripcion = $descripcion;
        $testimonio->banner = $compPicBanner;
        $testimonio->ruta_banner = $this->urlAssetsBanner.'/'.$compPicBanner;
        /* $testimonio->maestro = $maestro; */
        }

       if($request->hasFile('imagen_uno')){
        $completeFileNameImagenUno = $request->file('imagen_uno')->getClientOriginalName();
        $fileNameOnlyImagenUno = pathinfo($completeFileNameImagenUno, PATHINFO_FILENAME);
        $extensionImagenUno = $request->file('imagen_uno')->getClientOriginalExtension();
        $compPicImagenUno = str_replace('', '_', $fileNameOnlyImagenUno) . '-' . rand() . '_' . time() . '.' . $extensionImagenUno;
         $path = $request->file('imagen_uno')->move($this->urlAssetsProdImagenUno, $compPicImagenUno);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

          if ($testimonio->imagen_uno) {
            $this->deleteFileImagenUno($testimonio->imagen_uno);
           }

           $testimonio->titulo = $titulo;
        $testimonio->descripcion = $descripcion;
        $testimonio->imagen_uno = $compPicImagenUno;
        $testimonio->ruta_imagen_uno = $this->urlAssetsImagenUno.'/'.$compPicImagenUno;
        /* $testimonio->maestro = $maestro; */
        }

        if($request->hasFile('imagen_dos')){
        $completeFileNameImagenDos = $request->file('imagen_dos')->getClientOriginalName();
        $fileNameOnlyImagenDos = pathinfo($completeFileNameImagenDos, PATHINFO_FILENAME);
        $extensionImagenDos = $request->file('imagen_dos')->getClientOriginalExtension();
        $compPicImagenDos = str_replace('', '_', $fileNameOnlyImagenDos) . '-' . rand() . '_' . time() . '.' . $extensionImagenDos;
         $path = $request->file('imagen_dos')->move($this->urlAssetsProdImagenDos, $compPicImagenDos);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

          if ($testimonio->imagen_dos) {
            $this->deleteFileImagenDos($testimonio->imagen_dos);
           }

           $testimonio->titulo = $titulo;
        $testimonio->descripcion = $descripcion;
        $testimonio->imagen_dos = $compPicImagenDos;
        $testimonio->ruta_imagen_dos = $this->urlAssetsImagenDos.'/'.$compPicImagenDos;
        /* $testimonio->maestro = $maestro; */
        }

    }else{
         $testimonio->titulo = $titulo;
        $testimonio->descripcion = $descripcion;
    }

    if ($testimonio->save()) {
        return ['status' => true, 'message' => 'Datos actualizados con exito'];
    } else {
        return ['status' => false, 'message' => 'Something Went Wrong'];
    }
}


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



/* public function destroyFile($id){
        $testimonio=Testimonio::find($id);
        $this->deleteFile($testimonio->imagen);
        $testimonio->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    } */



   
     


    public function deleteFileBanner($fileName)
{
    $filePath = $this->urlAssetsProdBanner . '/' . $fileName;
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

public function deleteFileImagenUno($fileName)
{
    $filePath = $this->urlAssetsProdImagenUno . '/' . $fileName;
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

public function deleteFileImagenDos($fileName)
{
    $filePath = $this->urlAssetsProdImagenDos . '/' . $fileName;
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

public function destroy($id){
    $testimonio=Testimonio::find($id);
        $this->deleteFile($testimonio->imagen);
        $this->deleteFileBanner($testimonio->banner);
        $this->deleteFileImagenUno($testimonio->imagen_uno);
        $this->deleteFileImagenDos($testimonio->imagen_dos);
        $testimonio->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);

        /* $id=Testimonio::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK); */
    }
}
