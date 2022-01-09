<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CarController extends Controller
{
    //

    public function liste(){

        $cars = Cars::where(['userId'=>Auth()->user()->id])->paginate(2);
        return view('pages/dashboard/listing',compact('cars'));

    }

    public function show($id){
            $car = Cars::find($id);
            $images = Image::where(['carId'=>$id])->first();
            return view('pages/dashboard/car',compact('car','images'));
    }

    public function store(Request $request){

        $data = $request->except('token','files');
        $images = array();
        $myCar = Cars::create([
            'modele'=>$data['modele'],
            'marque'=>$data['marque'],
            'annee'=>$data['annee'],
            'prix'=>$data['prix'],
            'localisation'=>$data['localisation'],
            'numero'=>$data['numero'],
            'userId'=>Auth()->user()->id,
        ]);
        if($files = $request->file('files')){

            foreach($files as $file){
                $name = md5($file->getClientOriginalName()) ;
                $ext = strtolower($file->getClientOriginalExtension());
                $imgfullname = $name . '.' . $ext;
                $path = public_path().'/Carimages/';
                $imageUrl = $path . $imgfullname;
                $file->move($path, $imgfullname);
                $images[] = $imgfullname;
            }
        }
        Image::create([
            'carId'=>$myCar->id,
            'image'=>implode('|',$images)
        ]);


       Session::flash('message', 'Votre annonce a été ajoutée avec succès');
       return back();

    }
}
