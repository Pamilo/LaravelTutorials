<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller{

    public function index(Request $request): View{
        //lista ejemplo de productos
        $products = [];//esta sera nuestra DB
        $products[121]=['name'=>'TV Samsung','price'=>'1000'];
        $products[11]=['name'=>'TV Iphone','price'=>'200'];

        //obtener los datos de session de que hay en el carrito 
        $cartProducts = [];
        $cartProductData = $request->session()->get('cart_product_data'); //we get the products stored in session

        //si hay productos en el carro
        if ($cartProductData) {
            //cada producto lo volvemos una key y si esta en los datos del carro añadirlo para mostrarlo
            foreach ($products as $key => $product) {
                if (in_array($key, array_keys($cartProductData))) {
                    $cartProducts[$key] = $product;
                }
            }
        }

        $viewData = [];
        $viewData['title'] = 'Cart - Online Store';
        $viewData['subtitle'] = 'Shopping Cart';
        $viewData['products'] = $products;
        $viewData['cartProducts'] = $cartProducts;

        return view('cart.index')->with('viewData', $viewData);
    }

    public function add(string $id, Request $request): RedirectResponse{
        //obtener la lista de productos del carrito
        $cartProductData = $request->session()->get('cart_product_data');
        //añadir el id en la posicion correspondiente
        $cartProductData[$id] = $id;
        //actualizar la lista de objetos
        $request->session()->put('cart_product_data', $cartProductData);

        return back();
    }

    public function removeAll(Request $request): RedirectResponse{
        
        $request->session()->forget('cart_product_data');

        return back();
    }


}