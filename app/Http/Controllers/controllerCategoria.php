<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class controllerCategoria extends Controller
{
    public function getCategoria()
    {
        return response()->json(Categoria::all(), 200);
    }
    public function getCategoriaxId($id)
    {
        $categoria = Categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['Mensaje' => 'Categoria no Encontrada'], 404);
        }
        return response()->json(Categoria::find($id), 200);
    }
    public function crearCategoria(Request $request)
    {
        $categoria = Categoria::create($request->all());
        return response($categoria, 200);
    }
    public function actualizarCategoria(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['Mensaje' => 'Categoria no Encontrada'], 404);
        }
        $categoria->update($request->all());
        return response($categoria, 200);
    }

    public function eliminarCategoria($id)
    {
        $categoria = Categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['Mensaje' => 'Categoria no Encontrada'], 404);
        }
        $categoria->delete();
        return response()->json(['Mensaje' => 'Categoria Eliminada'], 200);
    }
}
