<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'review' => ["required"],
            'rating' => ["required","gt:0","lte:10"]
        ]);

        Review::create([
            "customer_id" => Auth::guard("web")->user()->id,
            "kost_id" => $request->kost_id,
            "review" => $request->review,
            "rating" => $request->rating
        ]);

        $kost = Kost::find($request->kost_id);

        $kost->update([
            'rating' => ($kost->rating + $request->rating) / $kost->review->count()
        ]);

        return redirect()->back()->with("success", "Review has been submitted");
    }
}
