<?php

namespace App\Http\Controllers;

use App\Pesanan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class PesananController extends Controller
{
    public function index(){
        $id_user = Auth::user()->id;
        $pesanans = Pesanan::where('id_user', $id_user)->get();
        
        return view('profile.index', ['pesanans' => $pesanans]);
    }
    
    public function store(Request $request){
        
        $day = intval(Carbon::now()->day);
        $month = intval(Carbon::now()->month);
        $year = intval(Carbon::now()->year);

        \App\Pesanan::create([
            'id_user' => $request->input('id_user'),
            'day' => $day,
            'month' => $month,
            'year' => $year
        ]);

        return view('bahanbaku.postcheckout');
    }
}
