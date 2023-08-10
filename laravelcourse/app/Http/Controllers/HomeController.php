<?php 
    namespace App\Http\Controllers;
    use Illuminate\View\View; //que es Illuminate
    class HomeController extends Controller{
        public function index():View{
            return view('home.index');
        }
    }