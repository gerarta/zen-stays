<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index() {
        // dd(Auth::user());
        // if (!Auth::user()) return redirect('/register')->with('error', 'not authorized');
        return view('user.index', [ 
            'user' => Auth::user(),
        ]);  
    }

    public function update(Request $request, $userId){
        $user = User::find($userId);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'dob' => 'required|string',
            'phone' => 'required|numeric',
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

        return redirect()->back()->with('success','Profile has successfuly updated');
    }
}
