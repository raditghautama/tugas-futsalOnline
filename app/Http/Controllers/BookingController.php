<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Field;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::orderBy('created_at', 'DESC')->get();

        return view('pages.admin.booking.index', [
            'bookings' => $bookings,
            'title' => 'Transaksi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $item = Booking::all();
        $fields = Field::all();
        $categories = Category::all();

        return view('pages.customer.checkout', [
            'title' => 'Manajemen lapangan',
            'categories' => $categories,
            'item' => $item,
            'fields' => $fields
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $field = Field::findOrFail($request->field_id);
        $data['proof_of_payment'] = $request->file('proof_of_payment')->store('bukti-pembayaran', 'public');
        $data['total_price'] = $field->harga * $request->duration;

        Booking::create($data);
        return redirect()->route('admin.booking');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $data = $request->all();
        if(!empty($data['proof_of_payment'])) {
            $data['proof_of_payment'] = $request->file('proof_of_payment')->store('bukti-pembayaran', 'public');
        }else{
            unset($data['proof_of_payment']);
        }

        Booking::findOrFail($id)->update($data);

        return redirect()->route('admin.booking');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Booking::findOrFail($id)->delete();
        return redirect()->route('lapangan.index');
    }
}
