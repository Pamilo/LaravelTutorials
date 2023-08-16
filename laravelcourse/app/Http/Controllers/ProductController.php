<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\View\View;
    use App\Models\Product;

    class ProductController extends Controller{
        /*public static $products = [
            ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "price"=>100000],
            ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=>20000],
            ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=>500],
            ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=>30]
        ];*/


    
        public function index():View{
            $viewData=[];
            $viewData["title"]= "Products - Online Store";
            $viewData["subtitle"] =  "List of products";
            $viewData["products"] = Product::all();
            return view('product.index')->with("viewData", $viewData);
        }

        public function show(string $id){
            $viewData = [];
            $product = Product::findOrFail($id);
            $viewData["title"] = $product["name"]." - Online Store";
            $viewData["subtitle"] =  $product["name"]." - Product information";
            $viewData["product"] = $product;
            return view('product.show')->with("viewData", $viewData);    
        }

        public function create(): View{
            $viewData = [] ;// lo que se manda a la vista
            $viewData["title"] = "Create product";
            return view('product.create')->with("viewData",$viewData);
        }

        public function save(Request $request){ // falta tipo de retorno // request es para recibir datos de formulario
            /*$request->validate(["name"=>"required","price"=>"required|numeric|gt:0"]); // esto hay que moverlo
            dd($request->all());*/
            Product::create($request->only(['name','price']));
            return back();
            //aqui regresar la vista de verificacion
        }
    }