<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
    public function add(Product $product){
        //Obtengo la variable de session cart (Es un array)
        $cart = \Session::get('cart');
        //Pongo a uno la cantidad de mi producto
        $product->quantity = 1;
        //Almaceno el producto en la posición del array que me dá el propio id delproducto
        $cart[$product->id] = $product;
        //Actualizo mi variable de sesión
        \Session::put('cart',$cart);

        //Redireccionamos a la vista del carrito
        return redirect()->route('cart-show');
    }

    //Delete item

    //Update item

    //Trash cart

    //Total
}
