<?php

namespace App\Http\Controllers;

use App\BahanBaku;
use App\Cart;
use App\Need;
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

    public function getBahanBaku($id)
    {
        // $bahanBakus = BahanBaku::all()->where('id', $id);
        $id_bahanbaku = Need::where('id_resep', $id)->select('id_bahanbaku');
        $bahanBakus = BahanBaku::whereIn('id', $id_bahanbaku)->get();
        
        return view('bahanbaku.index', ['bahanBakus' => $bahanBakus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bahanbaku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'jenis' => 'required',
            'price' => 'required',
            'pricetag' => '',
            'gambar' => 'required|image'
        ]);

        $imagePath = request('gambar')->store('uploads', 'public');

        \App\BahanBaku::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'jenis' => $data['jenis'],
            'price' => $data['price'],
            'pricetag' => 'test',
            'gambar' => 'storage/' . $imagePath,
        ]);

        return redirect('/bahanbaku/');
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
        return redirect()->route('bahanbaku');
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('bahanbaku.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('bahanbaku.shopping-cart', ['bahanBakus' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('bahanbaku.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('bahanbaku.checkout', ['total' => $total]);
    }

    public function postCheckout(){
        return view('bahanbaku.postcheckout');
    }
}
