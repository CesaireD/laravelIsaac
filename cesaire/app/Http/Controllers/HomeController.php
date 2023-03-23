<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function nouscontacter()
    {
        return view('nous-contacter');
    }

    public function apropos()
    {
        return view('a-propos');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function nosproduits()
    {
        return view('nos-produits');
    }

    public function login()
    {
        return view('/auth/login');
    }

    public function register()
    {
        return view('/auth/register');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function singleproduct(){
        $url = request('url');
        return view('single-product');
    }
    public function singleproductU(Request $request){
        $url = request('url');
        return view('single-product',['url' => \request('url')]);
    }

    public function profile(){
        return view('/profile/edit');
    }

    public function ajouter(){
        return view('/ajouter');
    }

    function ajoutPost(Request $request) {
        $request->validate(
            [
                "nom"=>['required'],
                "marque"=>['required'],
                "description"=>['required'],
                "prix"=>['required'],
                "quantite"=>['required']
            ]);
        $path = $request->file('img')->store('images');
        Car::create([
            "nom"=>$request->nom,
            "marque"=>$request->marque,
            "photo"=>$path,
            "description"=>$request->description,
            "prixLocation"=>$request->prix,
            "quantiteDispo"=>$request->quantite
        ]);
        return redirect()->back()->with('statut', 'Voiture ajoutée!');
        // dd($request->all());
    }
}
