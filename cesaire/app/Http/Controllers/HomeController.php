<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $lists = Car::all();
        return view('Home',['lists'=>$lists]);
    }

    public function dashboard()
    {
        $lists = Car::all();
        return view('Home', ['lists'=>$lists]);
    }

    public function nouscontacter()
    {
        return view('nous-contacter');
    }

    public function adminpage()
    {
        $listCar = Car::all();
        $listLoc = Location::all();
        $tv = 0;
        $te = 0;

        foreach ($listCar as $car){
            $tv += $car->quantiteDispo;//$car->prixLocation;
        }
        foreach ($listLoc as $loc){
            $te ++;
        }


        return view('adminpage', ['tV' => $tv, 'tE' => $te]);
    }

    public function apropos()
    {
        return view('a-propos');
    }

    public function gallery()
    {
        $listloc = Location::all();
        $lists = array();
        foreach ($listloc as $loc){
            $lists[] = Car::findOrFail($loc->car_id);
        }

        return view('gallery', ['lists'=>$lists]);
    }

    public function nosproduits()
    {
        $lists = Car::all();
        return view('nos-produits',['lists'=>$lists]);
    }

    public function login()
    {
        return view('/auth/login');
    }

    public function register()
    {
        return view('/auth/register');
    }

    public function singleproduct($id)
    {
        $theCar = Car::findOrFail($id);
        return view('single-product',['car' => $theCar]);
    }
    public function singleproductU($id){
        $theCar = Car::findOrFail($id);
        return view('single-product',['car' => $theCar]);
    }

    public function profile(){
        return view('/profile/edit');
    }

    public function ajout() {
        $listloc = Location::all();
        $lists = array();
        foreach ($listloc as $loc){
            $lists[] = Car::findOrFail($loc->car_id);
        }
        return view('location',['lists' => $lists]);
    }

    public function ajouter(){
        return view('/ajouter');
    }

    public function ajoutPost(Request $request) {
        $validateData = $request->validate(
            [
                "nom"=>['required'],
                "marque"=>['required'],
                "description"=>['required'],
                "prix"=>['required'],
                "quantite"=>['required']
            ]);

        $car = new Car();
        $car->nom = $validateData["nom"];
        $car->marque = $validateData["marque"];
        $car->description = $validateData["description"];
        $car->prixLocation = $validateData["prix"];
        $car->quantiteDispo = $validateData["quantite"];

        $image = $request->img;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->img->move('cars', $imagename);
        $car->photo = $imagename;
        $car->save();
    }

    public function read() {
        $lists = Car::all();
        return view('voitures', ['lists'=>$lists]);
    }

    public function update($id) {
        $car = Car::findOrFail($id);
        return view('update', ['car'=>$car]);
    }

    public function updatePost($id, Request $request) {
        $request->validate(
            [
                "nom"=>['required'],
                "marque"=>['required'],
                "description"=>['required'],
                "prix"=>['required'],
                "quantite"=>['required']
            ]);
        $path = $request->file('img')->store('images');

        Car::where('id', $id)->update([
            "nom"=>$request->nom,
            "marque"=>$request->marque,
            "photo"=>$path,
            "description"=>$request->description,
            "prixLocation"=>$request->prix,
            "quantiteDispo"=>$request->quantite
        ]);
        return redirect()->back()->with('statut', 'Modification effectué!');
    }

    public function delete($id) {
        Car::where('id', $id)->delete();
        return redirect()->back()->with('statut', 'Suppression effectué!');
    }

    public function detail($id) {
        $theCar = Car::findOrFail($id);
        return view('frontend.detail', ['car'=> $theCar]);
    }

    public function detailPost($id, Request $request) {
        $request->validate([
            "debut"=>['required'],
            "fin"=>['required'],
        ]);
        Location::create([
            "dateLocation"=>$request->debut,
            "dateFinLocation"=>$request->fin,
            "restorer"=>0,
            /*"user_id"=>$request,
            "car_id"=>$request,*/
        ]);
        return redirect()->back()->with('statut', 'Votre demande a été approuvée');
    }

    public function offers() {
        $allCars = Car::all();
        return view('frontend.offers', ['allCars' => $allCars]);
    }
}
