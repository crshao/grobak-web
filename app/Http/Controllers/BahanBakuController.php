<?php

namespace App\Http\Controllers;

use App\BahanBaku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = DB::table('bahanbakus')->count();
        $bahanBaku = DB::table('bahanbakus')->get();
        
        return view('layouts.bahan_baku.index', ['count' => $count, 'bahanBaku' => $bahanBaku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BahanBaku  $bahanBaku
     * @return \Illuminate\Http\Response
     */
    public function show(BahanBaku $bahanBaku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BahanBaku  $bahanBaku
     * @return \Illuminate\Http\Response
     */
    public function edit(BahanBaku $bahanBaku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BahanBaku  $bahanBaku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BahanBaku $bahanBaku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BahanBaku  $bahanBaku
     * @return \Illuminate\Http\Response
     */
    public function destroy(BahanBaku $bahanBaku)
    {
        //
    }
}
