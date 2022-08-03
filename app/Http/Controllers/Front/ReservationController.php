<?php

namespace App\Http\Controllers\front;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ReservationController extends Controller
{
    public function index() {
        return view('front.pages.reservation.index');
    }
    public function store(Request $request) {
        
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => "required|email",
            'phone' => "required|string",
            'date' => "required|after_or_equal:".date("Y-m-d"),
            'time' => "required",
            'guest' => "required|int|max:5|min:1"
        ]);

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->guest = $request->guest;
        $reservation->save();
        
        return Redirect::back()->with(['success' => ['Data Was Changed Successfully']]);
        
    }
}
