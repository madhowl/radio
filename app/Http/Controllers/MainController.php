<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Radio;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function index1(){
        return view('main');
    }

    public function index2(){
        $categories = Category::all('id','title');
//        dd($categories);
        return view('genres.list')->with('categories',$categories);
    }
    public function showRadiosFromGenre($id)
    {
        $radios = Radio::where('categories_id', $id)->get();
        return view('genres.from-id')->with('radios',$radios);

    }



    public function index3(){
        return view('./countries/russia');
    }

    public function index4(){
        return view('./auth/login');
    }

    public function index5(){
        return view('./auth/register');
    }

    public function index6(){
        return view('about');
    }

    public function index7(){
        return view('contact');
    }


}
