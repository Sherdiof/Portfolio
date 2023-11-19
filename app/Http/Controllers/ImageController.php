<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $imagen = $request->file('file');
        $nombreImagen = Str::uuid().'.'.$imagen->extension();

        //Utilizar Intervention Imagen para redimensionar la imagen
        $imagenServidor = Image::make($imagen)->fit(382, 287);
        //Mover
        $imagenPath = public_path('projects_img'). '/' . $nombreImagen;
        $imagenServidor->save($imagenPath);

        return response()->json(['image_project' => $nombreImagen]);
    }
}
