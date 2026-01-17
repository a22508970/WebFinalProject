<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        return view('pages.admin_home');
    }

    public function allBookings() {
        $bookings = DB::table('bookings')->get();
        return view('pages.admin_bookings', compact('bookings'));
    }

    public function allContacts(){
    $contacts = DB::table('contacts')
        ->get();

    return view('pages.admin_contacts', compact('contacts'));
    }

    public function edit(Booking $booking){
        return view('pages.admin_edit', compact('booking'));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'service_type' => 'required|string|max:255',
            'start_date'   => 'required|date',
            'end_date'     => 'required|date|after_or_equal:start_date',
            'email'        => 'required|email',
            'company_name' => 'required|string|max:255',
            'notes'        => 'nullable|string',
        ]);

        DB::table('bookings')
            ->where('id', $id)
            ->update($data);

        return redirect()
            ->route('admin.home')
            ->with('success', 'Booking updated successfully.');
            return view('pages.admin_home', compact('booking'));
    }


    public function destroy(Booking $booking){
        $booking->delete();
        return redirect()->route('admin.home')->with('success', 'Booking deleted.');
    }


}
