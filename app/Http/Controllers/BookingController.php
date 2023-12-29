<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kost;
use DateTime;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function confirmation(Request $request){
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
            
        return view('booking.confirmation', [
            'kost' => $kost,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_months' => $total_months
        ]);
    }

    public function store(Request $request){
        $kost = Kost::find($request->kost_id);

        if(!$kost)
            return redirect('/')->with('error', 'Kost not found');

        $date1 = new DateTime($request->start_date);
        $date2 = new DateTime($request->end_date);
        $interval = $date1->diff($date2);

        $kost->update([
            'temp_quota' => $kost->temp_quota + 1,
        ]);
        

        Booking::create([
            'customer_id' => auth()->user()->id,
            'kost_id' => $kost->id,
            'start_date' => $request->start_date,
            'end_date'=> $request->end_date,
            'is_confirmed' => 0,
            'is_ongoing' => 1,
            'total_amount' => $request->total_amount,
            'temp_amount' => 0
        ]);

        return redirect(route('user.index'))->with('success', 'Booking has been successfuly made');
    }
}
