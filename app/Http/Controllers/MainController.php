<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Radio;
use App\Models\Country;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function index1(){
        return view('main');
    }

    public function categories(){
        $categories = Category::all('id','title');
//        dd($categories);
        return view('genres.genres')->with('categories',$categories);
    }
    public function countries(){
        $countries = Country::all('id','title');
//        dd($countries);
        return view('countries.countries')->with('countries',$countries);
    }
    public function showRadiosFromGenre($id)
    {
        $radios = Radio::where('categories_id', $id)->get();
        return view('genres.from-genres')->with('radios',$radios);
    }
    public function showRadiosFromCountries($id)
    {
        $radios = Radio::where('countries_id', $id)->get();
        return view('countries.from-countries')->with('radios',$radios);
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
