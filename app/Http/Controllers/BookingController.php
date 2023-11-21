<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use DateTime;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date']
        ]);

        $kost = Kost::find($request->kost_id);

        if(!$kost)
            return redirect('/')->with('error', 'Kost not found');

        $start = new DateTime($request->start_date);
        $end = new DateTime($request->end_date);
        
        $diff = $start->diff($end);

        $yearsInMonths = $diff->format('%r%y') * 12;
        $months = $diff->format('%r%m');
        $total_months = $yearsInMonths + $months;
            
        return view('booking.check-out', [
            'kost' => $kost,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_months' => $total_months
        ]);
    }
}
