<?php

namespace App\Http\Controllers;

use App\BahanBaku;
use App\Cart;
use Illuminate\Http\Request;
use Session;

class BahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahanBakus = BahanBaku::all();
        
        return view('bahanbaku.index', ['bahanBakus' => $bahanBakus]);
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

    public function getAddToCart(Request $request, $id){
        $bahanBaku  = BahanBaku::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($bahanBaku, $bahanBaku->id);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('layouts.bahan_baku.index');
    }
}
