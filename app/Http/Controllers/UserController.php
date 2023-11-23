<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index() {
        $user = Auth::guard('web')->user();

        $bookings = $user->booking;

        if(!$bookings)
            $bookings = [];

        return view('user.index', [ 
            'user' => $user,
            'bookings' => $bookings,
        ]);  
    }

    public function edit() {
        // dd(Auth::user());
        // if (!Auth::user()) return redirect('/register')->with('error', 'not authorized');
        return view('user.edit', [ 
            'user' => Auth::user(),
        ]);  
    }

    public function update(Request $request, $userId){
        $user = User::find($userId);
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'dob' => 'required|date',
            'phone_number' => 'required',
            'address' => 'required|string',
            'gender' => 'required|string',
        ]);


        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'gender' => $request->gender,
        ]);

        return redirect(route('user.index'))->with('success','Profile has successfuly updated');
    }
}
