<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function store(
        StoreBookingRequest $request,
        Ticket $ticket
    )
    {
        $quantity = $request->quantity;

        DB::transaction(function () use ($ticket, $quantity) {

            $remaining =
                $ticket->quantity -
                $ticket->sold;

            if ($remaining < $quantity) {
                abort(422, 'Not enough tickets available');
            }

            Booking::create([
                'user_id' => Auth::id(),
                'ticket_id' => $ticket->id,
                'quantity' => $quantity,
                'status' => 'confirmed',
            ]);

            $ticket->increment('sold', $quantity);
        });

        return response()->json([
            'message' => 'Booking created successfully'
        ], 201);
    }
}
