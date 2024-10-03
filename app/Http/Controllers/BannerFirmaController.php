<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

use App\Models\BannerFirma;

class BannerFirmaController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        // Inicializar la variable global en el constructor
        $this->urlAssets = 'assets/imagen/banner/firma';
        $this->urlAssetsProd = config('myconfig.url_upload_banner_firma');
        /* $this->urlAssetsProd = '/home1/iatecdigital/back.iatecdigital.com/assets/imagen/banner'; */
    }

    public function index(){
        $banner_firma=BannerFirma::all();
        return response()->json($banner_firma,Response::HTTP_OK);
    }

    public function file(Request $request)
    {
        $post = new BannerFirma();

        if ($request->hasFile('imagen')) {
            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

        $post->imagen = $compPic;
        $post->ruta_imagen = $this->urlAssets.'/'.$compPic; 
        }
        if ($post->save()) {
            return ['status' => true, 'message' => 'Post Saved Successfully'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

    public function updateFile(Request $request)
{
    $id = $request->input('id_banner_firma');
    $post = BannerFirma::find($id);

    if (!$post) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

        
        

        
        if ($post->imagen) {
            
            $this->deleteFile($post->imagen);
        }

        $post->imagen = $compPic;
        
        $post->ruta_imagen = $this->urlAssets.'/'.$compPic;

       

    }

    

    if ($post->save()) {
        return ['status' => true, 'message' => 'Post Updated Successfully '];
    } else {
        return ['status' => false, 'message' => 'Something Went Wrong'];
    }
}

 public function destroy($category){
        $category=BannerFirma::find($category);
        $this->deleteFile($category->imagen);
        $category->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
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
}
