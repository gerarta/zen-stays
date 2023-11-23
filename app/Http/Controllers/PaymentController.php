<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\PaymentProvider;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function create($bookingId){
        $booking = Booking::find($bookingId);

        if(!$booking)
            return redirect(route('user.index'))->with('error', 'Booking not found');

        $payment_providers = PaymentProvider::all();
        
        return view('payment.create', [
            'booking' => $booking,
            'payment_providers' => $payment_providers
        ]);
    }

    public function store(Request $request){

        $request->validate([
            'payment_type' => 'required',
            'payment_provider_id' => 'required',
            'account_number' => 'required',
            'account_name' => 'required',
            'payment_proof' => 'required',
        ]);

        $booking = Booking::find($request->booking_id);

        if(!$booking)
            return redirect(route('user.index'))->with('error', 'Booking not found');

        if ($image = $request->file('payment_proof')) {
            $extension = $request->file('payment_proof')->getClientOriginalExtension();
            $fileName = $request->name . '_' . time() . '.' . $extension;
            $destinationPath = 'public/payment/payment_proof';
            $image->storeAs($destinationPath, $fileName);
        }

        Payment::create([
            'payment_provider_id' => $request->payment_provider_id,
            'booking_id' => $request->booking_id,
            'account_name' => $request->account_name,
            'account_number' => $request->account_number,
            'payment_proof' => $fileName,
            'is_confirmed' => false,
            'amount' => $request->amount,
        ]);

        $booking->update([
            'temp_amount' => $booking->temp_amount + (int) $request->amount
        ]);

        return redirect(route('user.index'))->with('success', 'Payment has been successfully made');
    }
}
