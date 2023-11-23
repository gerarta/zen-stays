<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KostController extends Controller
{
    public function show($id){
        $kost = Kost::find($id);
        if(!$kost)
            return redirect('/')->with('error', 'Kost doesn\'t exist');


        return view('kost.show', [
            'kost' => $kost,
            'current_date' => date('Y-m-d')
        ]);
    }

    public function wishlist(){
        
        $kosts = Kost::all();

        return view('kost.wishlist', [
            'kosts' => $kosts
        ]);
    }

    public function showList(){
        $kosts = Kost::all();
        if(request("name")){
            $name = request("name");
            $kosts = Kost::where('name', 'like', '%'.$name.'%' )->get();
        }

        if(request("price_range")){
            $priceRange = explode(",", request('price_range'));
            $kosts = $kosts->where('price', '>=', $priceRange[0])
                -> where('price', "<=" , $priceRange[1]);
        }
        return view('kost.list',[ 
            'kosts' => $kosts
        ]);
    }
}
