<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*
    CLASE 3
    */
    public function mostrar(){
        //return view('producto');
        return ('Desde el controlador');
    }

    public function mostrarView(){
        return view('producto');
    }

    public function mostrarApi(){
        return view('producto');
    }

    public function mostrarViewCarpeta(){
        $products = ['jabon', 'papel', 'shampoo'];
        $proveedores = ['apple', 'google'];
        //with para enviar parametros
        return view('products.index')->with('products',$products)->with('proveedores', $proveedores);
    }

    public function mostrarViewCarpetaCompact(){
        $products = ['jabon', 'papel', 'shampoo'];
        $proveedores = ['apple', 'google'];
        //compact sirve para enviar mas rapido valores
        return view('products.index', compact('products', 'proveedores'));
    }

    /*
    CLASE 4
    */

    public function mostrarProducts(){
        return view('products.index');
    }

}
