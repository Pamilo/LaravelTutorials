<?php 
    namespace App\Http\Controllers;
    use Illuminate\View\View; //que es Illuminate
    class HomeController extends Controller{
        public function index():View{
            return view('home.index');
        }
        public function contact():View{
            return view('home.contact');
        }
        
        public function about():View{
            $data1 = "About us - Online Store";
            $data2 = "About us";
            $description = "This is an about page ...Hola profe :)";
            $author = "Developed by: Pablo Micolta Lopez";
            return view('home.about')->with("title", $data1)
                                     ->with("subtitle", $data2)
                                     ->with("description", $description)
                                     ->with("author", $author);
        }
    }