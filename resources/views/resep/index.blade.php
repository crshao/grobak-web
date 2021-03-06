@extends('layouts.app')

@section('title')
  Bahan Baku
@endsection

@section('content')
  @foreach($reseps->chunk(3) as $resepChunk)
    <div class="card-deck">
      @foreach($resepChunk as $resep)
        <div class="col-sm-6 col-md-4">
          <div class="card">
            <img class="card-img" width="200" height="200" src="{{ $resep->gambar }}">
            <div class="figure-caption">
              <h3 class="card-title">{{$resep->name}}</h3>
              <div class="card-subtitle">
                <a href="{{ route('bahanbaku.get', ['id' => $resep->id]) }}" class="btn btn-success" role="button">Lihat</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach
@endsection