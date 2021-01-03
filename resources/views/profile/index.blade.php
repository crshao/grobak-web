@extends('layouts.app')

@section('title')
  Bahan Baku
@endsection

@section('content')
  @foreach($pesanans->chunk(3) as $pesananChunk)
    <div class="card-deck">
      @foreach($pesananChunk as $pesanan)
        <div class="col-sm-6 col-md-4">
            <div class="card bg-danger">
                <div class="figure-caption">
                <h3 class="card-title text-primary">{{$pesanan->day}}/{{$pesanan->month}}/{{$pesanan->year}}</h3>
                </div>
            </div>
        </div>
      @endforeach
    </div>
  @endforeach
@endsection