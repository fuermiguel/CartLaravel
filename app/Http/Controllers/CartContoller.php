<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartContoller extends Controller
{
    public function __construct(){

        // El "\" delante de la clase Session, indica a laravell que busque la clase en el namespace global

        //Los métodos que uso son de "Illuminate\Session\Store"

        //Creo un pqr key/value que almacena en el indice cart un array con los elementos del carrito.
        if(!\Session::has('cart')) \Session::put('cart',array());
    }
    //Show cart
    public function show(){
        //Obtengo mi variable de sesión.
        return \Session::get('cart');
    }

    //Add item

    //Delete item

    //Update item

    //Trash cart

    //Total
}
