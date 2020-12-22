@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="row container">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($bahanBakus as $bahanBaku)
                        <li class="list-group-item">
                            <span class="badge">{{ $bahanBaku['quantity'] }}</span>
                            <strong>{{ $bahanBaku['item']['name'] }}</strong>
                            <span class="label label-success">{{ $bahanBaku['price'] }}</span>
                            <div class="btn-group">
                                <button class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">
                                    Action <span class="caret">
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="btn btn-warning" href="#">Reduce by 1</a>
                                                <a class="btn btn-danger" href="#">Reduce All</a>
                                            </li>
                                        </ul>
                                    </span>
                                </button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row container">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total {{$totalPrice}}</strong>
            </div>
        </div>
        <br>
        <div class="row container">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Item</h2>
            </div>
        </div>
    @endif
@endsection