<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{

    public function getIndex()
    {
        $productos = Producto::all();
        return view('productos.index', array('productos' => $productos));
    }
    public function getShow($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', array('producto' => $producto, 'id' => $id));
    }
    public function getCreate()
    {
        //return view('home');
        return view('productos.create');
    }
    public function postCreate(Request $request)
    {

        $nombre = $request->input('nombre');
        $precio = $request->input('precio');
        $categoria = $request->input('categoria');
        $imagen = $request->input('imagen');

        $p = new Producto;
        $p->nombre = $nombre;
        $p->precio = $precio;
        $p->categoria = $categoria;
        $p->imagen = $imagen;
        $p->save();

        return redirect('productos');
    }
    public function getEdit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', array('producto' => $producto, 'id' => $id));
    }
    public function putEdit(Request $request, $id)
    {

        $nombre = $request->input('nombre');
        $precio = $request->input('precio');
        $categoria = $request->input('categoria');
        $imagen = $request->input('imagen');

        $p = Producto::findOrFail($id);
        $p->nombre = $nombre;
        $p->precio = $precio;
        $p->categoria = $categoria;
        $p->imagen = $imagen;
        $p->save();
        return redirect('productos/edit/'.$id);
    }
}

