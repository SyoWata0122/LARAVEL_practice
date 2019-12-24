<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create() {

        return view('reservation');
        return back()->with('result', '予約が完了しました。');


    }

    public function store(ReservationRequest $request){

        \App\Reservation::create([                    /**ここでデータ保存 */
            'room_id' => $request->room_id,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at

        ]);


    }
}

