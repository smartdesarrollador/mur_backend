<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/* 10.- LOGIN_REGISTER_BASICO-V1-P1 */
use App\Http\Controllers\UserController;
/* /10.- LOGIN_REGISTER_BASICO-V1-P1 */


use App\Mail\TestContact;
use App\Http\Controllers\Test\ContactController;


use App\Http\Controllers\Test\Api\CrudController;
use App\Http\Controllers\Test\TestFileController;
use App\Http\Controllers\TestApiController;
use App\Http\Controllers\Test\TestConsultasController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MisionController;
use App\Http\Controllers\CarouselController;
/* 12.- CRUD-BASICO-V1-P1 */
use App\Http\Controllers\ProductoController;
/* /12.- CRUD-BASICO-V1-P1 */
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\TestimonioController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\InformativoController;
use App\Http\Controllers\SliderReconocimientoController;
use App\Http\Controllers\SliderComentarioController;
use App\Http\Controllers\SliderMiembroController;
use App\Http\Controllers\BannerPublicacionController;
use App\Http\Controllers\BannerFirmaController;
use App\Http\Controllers\BannerAreaController;
use App\Http\Controllers\BannerEquipoController;






use App\Models\Producto;

use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::apiResource('test_api', TestApiController::class);

Route::get('test/consulta1', [TestConsultasController::class, 'consulta1']);

/* crud basico */

/* Route::apiResource('test_api_crud', CrudController::class)->middleware('cors'); */

Route::get('test_api_crud', [CrudController::class, 'index']);
Route::post('test_api_crud', [CrudController::class, 'store']);
Route::put('test_api_crud/{id}', [CrudController::class, 'update']);
Route::delete('test_api_crud/{id}', [CrudController::class, 'destroy']);





/* Upload imagenes */
Route::post('file', [TestFileController::class, 'file']);

Route::get('listar/files', [FileController::class, 'index']);

Route::post('upload', [FileController::class, 'file']);

Route::post('update/upload', [FileController::class, 'updateFile']);

Route::delete('update/upload/{id}', [FileController::class, 'destroy']);


/* Upload imagenes Carousel */

Route::get('carousel/listar/files', [CarouselController::class, 'index']);

Route::post('carousel/upload', [CarouselController::class, 'file']);

Route::post('carousel/update/upload', [CarouselController::class, 'updateFile']);

Route::delete('carousel/update/upload/{id}', [CarouselController::class, 'destroy']);

/* Crud Mision */

Route::get('mision', [MisionController::class, 'index']);

Route::put('mision/actualizar/{id}', [MisionController::class, 'update']);

Route::post('mision/update/upload', [MisionController::class, 'updateFile']);

/* 11.- LOGIN_REGISTER_BASICO-V1-P1 */
Route::post('register',[UserController::class,'register']);

Route::post('login',[UserController::class,'login']);
/* /11.- LOGIN_REGISTER_BASICO-V1-P1 */


/* Test Envio Mail */
Route::get('contactanos',function(){
    Mail::to('prueba@iatecdigital.com')->send(new TestContact("hola"));
    return "mensaje enviado";
})->name('contactanos');

Route::post('enviar_correo',[ContactController::class,'sendContactForm']);

/* 13.- CRUD-BASICO-V1-P1 */
// Crud Productos
/* 3.- LISTAR-S1 */
Route::get('productos', [ProductoController::class, 'index']);
/* /3.- LISTAR-S1 */
Route::get('productos/cursos', [ProductoController::class, 'obtenerCursos']);
Route::get('productos/especialidades', [ProductoController::class, 'obtenerEspecialidades']);
Route::get('productos/destacados', [ProductoController::class, 'obtenerDestacados']);
Route::post('productos', [ProductoController::class, 'store']);
Route::get('productos/{id}', [ProductoController::class, 'show']);
Route::put('productos/{id}', [ProductoController::class, 'update']);
Route::delete('productos/{id}', [ProductoController::class, 'destroy']);
Route::post('productos/subir', [ProductoController::class, 'file']);
Route::post('productos/update', [ProductoController::class, 'updateFile']);
/* /13.- CRUD-BASICO-V1-P1 */

// Contacto
Route::get('contactos', [ContactoController::class, 'index']);
Route::post('contacto',[ContactoController::class,'sendContactForm']);

// Crud Testimonio
Route::get('testimonios', [TestimonioController::class, 'index']);
Route::post('testimonios', [TestimonioController::class, 'store']);
Route::get('testimonios/{id}', [TestimonioController::class, 'show']);
Route::put('testimonios/{id}', [TestimonioController::class, 'update']);
Route::delete('testimonios/{id}', [TestimonioController::class, 'destroy']);
Route::post('testimonios/subir', [TestimonioController::class, 'file']);
Route::post('testimonios/update', [TestimonioController::class, 'updateFile']);

// Crud Banner
Route::get('banners', [BannerController::class, 'index']);
Route::post('banners', [BannerController::class, 'store']);
Route::get('banners/{id}', [BannerController::class, 'show']);
Route::put('banners/{id}', [BannerController::class, 'update']);
Route::delete('banners/{id}', [BannerController::class, 'destroy']);
Route::post('banners/subir', [BannerController::class, 'file']);
Route::post('banners/update', [BannerController::class, 'updateFile']);

// Crud Slider
Route::get('sliders', [SliderController::class, 'index']);
Route::post('sliders', [SliderController::class, 'store']);
Route::get('sliders/{id}', [SliderController::class, 'show']);
Route::put('sliders/{id}', [SliderController::class, 'update']);
Route::delete('sliders/{id}', [SliderController::class, 'destroy']);
Route::post('sliders/subir', [SliderController::class, 'file']);
Route::post('sliders/update', [SliderController::class, 'updateFile']);


// Crud Salas
Route::get('salas', [SalaController::class, 'index']);
Route::get('salas/destacados', [SalaController::class, 'obtenerDestacados']);
Route::post('salas', [SalaController::class, 'store']);
Route::get('salas/{id}', [SalaController::class, 'show']);
Route::put('salas/{id}', [SalaController::class, 'update']);
Route::delete('salas/{id}', [SalaController::class, 'destroy']);
Route::post('salas/subir', [SalaController::class, 'file']);
Route::post('salas/update', [SalaController::class, 'updateFile']);

// Crud Informativos
Route::get('informativos', [InformativoController::class, 'index']);
Route::get('informativos/destacados', [InformativoController::class, 'obtenerDestacados']);
Route::post('informativos', [InformativoController::class, 'store']);
Route::get('informativos/{id}', [InformativoController::class, 'show']);
Route::put('informativos/{id}', [InformativoController::class, 'update']);
Route::delete('informativos/{id}', [InformativoController::class, 'destroy']);
Route::post('informativos/subir', [InformativoController::class, 'file']);
Route::post('informativos/update', [InformativoController::class, 'updateFile']);

// Crud Slider Reconocimiento
Route::get('slider/reconocimiento', [SliderReconocimientoController::class, 'index']);
Route::post('slider/reconocimiento', [SliderReconocimientoController::class, 'store']);
Route::get('slider/reconocimiento/{id}', [SliderReconocimientoController::class, 'show']);
Route::put('slider/reconocimiento/{id}', [SliderReconocimientoController::class, 'update']);
Route::delete('slider/reconocimiento/{id}', [SliderReconocimientoController::class, 'destroy']);
Route::post('slider/reconocimiento/subir', [SliderReconocimientoController::class, 'file']);
Route::post('slider/reconocimiento/update', [SliderReconocimientoController::class, 'updateFile']);    

// Crud Slider Comentario
Route::get('slider/comentario', [SliderComentarioController::class, 'index']);
Route::post('slider/comentario', [SliderComentarioController::class, 'store']);
Route::get('slider/comentario/{id}', [SliderComentarioController::class, 'show']);
Route::put('slider/comentario/{id}', [SliderComentarioController::class, 'update']);
Route::delete('slider/comentario/{id}', [SliderComentarioController::class, 'destroy']);
Route::post('slider/comentario/subir', [SliderComentarioController::class, 'file']);
Route::post('slider/comentario/update', [SliderComentarioController::class, 'updateFile']);    

// Crud Slider Miembro
Route::get('slider/miembro', [SliderMiembroController::class, 'index']);
Route::post('slider/miembro', [SliderMiembroController::class, 'store']);
Route::get('slider/miembro/{id}', [SliderMiembroController::class, 'show']);
Route::put('slider/miembro/{id}', [SliderMiembroController::class, 'update']);
Route::delete('slider/miembro/{id}', [SliderMiembroController::class, 'destroy']);
Route::post('slider/miembro/subir', [SliderMiembroController::class, 'file']);
Route::post('slider/miembro/update', [SliderMiembroController::class, 'updateFile']);      

// Crud Banner Publicacion
Route::get('banner/publicacion', [BannerPublicacionController::class, 'index']);
Route::post('banner/publicacion', [BannerPublicacionController::class, 'store']);
Route::get('banner/publicacion/{id}', [BannerPublicacionController::class, 'show']);
Route::put('banner/publicacion/{id}', [BannerPublicacionController::class, 'update']);
Route::delete('banner/publicacion/{id}', [BannerPublicacionController::class, 'destroy']);
Route::post('banner/publicacion/subir', [BannerPublicacionController::class, 'file']);
Route::post('banner/publicacion/update', [BannerPublicacionController::class, 'updateFile']);                        

// Crud Banner Firma
Route::get('banner/firma', [BannerFirmaController::class, 'index']);
Route::post('banner/firma', [BannerFirmaController::class, 'store']);
Route::get('banner/firma/{id}', [BannerFirmaController::class, 'show']);
Route::put('banner/firma/{id}', [BannerFirmaController::class, 'update']);
Route::delete('banner/firma/{id}', [BannerFirmaController::class, 'destroy']);
Route::post('banner/firma/subir', [BannerFirmaController::class, 'file']);
Route::post('banner/firma/update', [BannerFirmaController::class, 'updateFile']);                                                  

// Crud Banner Area
Route::get('banner/area', [BannerAreaController::class, 'index']);
Route::post('banner/area', [BannerAreaController::class, 'store']);
Route::get('banner/area/{id}', [BannerAreaController::class, 'show']);
Route::put('banner/area/{id}', [BannerAreaController::class, 'update']);
Route::delete('banner/area/{id}', [BannerAreaController::class, 'destroy']);
Route::post('banner/area/subir', [BannerAreaController::class, 'file']);
Route::post('banner/area/update', [BannerAreaController::class, 'updateFile']);    

// Crud Banner Equipo
Route::get('banner/equipo', [BannerEquipoController::class, 'index']);
Route::post('banner/equipo', [BannerEquipoController::class, 'store']);
Route::get('banner/equipo/{id}', [BannerEquipoController::class, 'show']);
Route::put('banner/equipo/{id}', [BannerEquipoController::class, 'update']);
Route::delete('banner/equipo/{id}', [BannerEquipoController::class, 'destroy']);
Route::post('banner/equipo/subir', [BannerEquipoController::class, 'file']);



