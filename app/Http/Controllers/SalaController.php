<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
use App\Http\Requests\SalaRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SalaController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/sala';
        $this->urlAssetsProd = config('myconfig.url_upload_sala');
        
    }

   public function index()
    {
        $salas = Sala::all();
        return response()->json($salas, Response::HTTP_OK);
    }

    public function obtenerDestacados()
    {
        $salas = DB::table('salas')
            ->where('destacado', 'true')
            ->get();

        return response()->json($salas);
    }

    public function store(SalaRequest $request)
    {
        $salas=Sala::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$salas
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $sala = Sala::find($id);

        if (!$sala) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($sala, 200);
    }

    public function update(SalaRequest $request,$id){
        $id=Sala::find($id);
        $id->update($request->only('titulo','descripcion','link'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    public function destroy($id){
        $id=Sala::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

     public function file(Request $request)
    {
        $sala= new Sala();

        if ($request->hasFile('imagen')) {

            $titulo = $request->input('titulo');
            $descripcion = $request->input('descripcion');
            $link = $request->input('link');
            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

            $sala->titulo = $titulo;
            $sala->descripcion = $descripcion;
            $sala->link = $link;
            $sala->imagen = $compPic;
            $sala->ruta_imagen = $this->urlAssets.'/'.$compPic; 
        }
        if ($sala->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_sala');
    $titulo = $request->input('titulo');
    $descripcion = $request->input('descripcion');
    $link = $request->input('link');

    $sala = Sala::find($id);

    if (!$sala) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
        
 
        if ($sala->imagen) {
            $this->deleteFile($sala->imagen);
        }

        $sala->titulo = $titulo;
        $sala->descripcion = $descripcion;
        $sala->link = $link;
        $sala->imagen = $compPic;
        $sala->ruta_imagen = $this->urlAssets.'/'.$compPic;


    }else{
         $sala->titulo = $titulo;
        $sala->descripcion = $descripcion;
        $sala->link = $link;
    }

    if ($sala->save()) {
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
        $sala=Sala::find($id);
        $this->deleteFile($sala->imagen);
        $sala->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
