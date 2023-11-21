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
}
