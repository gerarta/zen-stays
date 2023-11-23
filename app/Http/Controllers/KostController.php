<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Wish;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        
        $wishes = Auth::guard('web')->user()?->wish;

        if($wishes == null){
            $wishes = [];
        }

        return view('kost.wishlist', [
            'wishes' => $wishes
        ]);
    }

    public function addWishlist(Request $request){
        
        $kost = Kost::find($request->kost_id);

        if(!$kost)
            return redirect('/')->with('error','Error kost not found');
        
        
        Wish::create([
            'kost_id' => $request->kost_id,
            'customer_id' => auth()->user()->id,
        ]);
        
        return redirect('/kost/wishlist')->with('success','Successfuly created!');

    }

    public function deleteWishlist($id){
        $wish = Wish::find($id);

        if(!$wish)
            return view('kost.wishlist')->with('error', 'Wish not found');
        
        $wish->delete();
        
        return redirect()->back()->with('success', 'Succssfully removed');
    }

    public function showList(){
        $kosts = Kost::all();
        if(request("name")){
            $name = request("name");
            $kosts = Kost::where('name', 'like', '%'.$name.'%')
                        ->orWhere('address', 'like', '%'.$name.'%')
                        ->orWhere('city', 'like', '%'.$name.'%')
                        ->orWhere('province', 'like', '%'.$name.'%')
                        ->get();
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
