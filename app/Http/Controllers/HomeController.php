<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class HomeController extends Controller
{
    //
    function index(){
      
        $productos = Product::all();
        return view('productos.index', array('productos'=>$productos));
    }
}
