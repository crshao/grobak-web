<?php

namespace App\Http\Controllers;

use App\Pesanan;
use App\Courier;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class PesananController extends Controller
{
    public function index(){
        $id_user = Auth::user()->id;
        
        $pesanans = Pesanan::join('couriers', 'couriers.id', '=', 'pesanans.id_courier')
            ->where('id_user', $id_user)
            ->orderBy('created_at', 'desc')
            ->get(['pesanans.*', 'couriers.name as courier_name', 'couriers.phone_number as phone_number']);

        return view('profile.index', ['pesanans' => $pesanans]);
    }
    
    public function store(Request $request){
        \App\Pesanan::create([
            'id_user' => $request->input('id_user'),
            'state' => 1,
            'id_courier' => 1
        ]);

        return view('bahanbaku.postcheckout');
    }
}
