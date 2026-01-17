<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function booking()
    {
        return view('pages.booking');
    }

    public function contact()
    {
        return view('pages.contact');
    }

     public function storeBooking(Request $request)
    {
        $data= $request->validate([
            'service_type' => 'required|string|max:255',
            'start_date'   => 'required|date',
            'end_date'     => 'required|date|after_or_equal:start_date',
            'email'        => 'required|email',
            'company_name' => 'required|string|max:255',
            'notes'        => 'nullable|string',
        ]);

        DB::table('bookings')->insert($data); // inserts new booking row

        return redirect()
            ->route('client.home')
            ->with('success', 'Your booking has been created successfully.');
            // success message in English [web:177][web:183]
        }

         public function storeContact(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        DB::table('contacts')->insert($data);

        return redirect()->route('client.home')->with('success', 'Message sent successfully!');
    }
}
