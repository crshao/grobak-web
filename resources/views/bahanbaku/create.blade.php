@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <h1>Tambah Bahan Baku Baru</h1>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">Nama</label>

                        <input id="name"
                            type="text"
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name"
                            value="{{ old('name') }}"
                            autocomplete="name" autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                        <label for="deskripsi" class="col-md-4 col-form-label">Deskripsi</label>

                        <input id="deskripsi"
                            type="text"
                            class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}"
                            name="deskripsi"
                            value="{{ old('deskripsi') }}"
                            autocomplete="deskripsi" autofocus>

                        @if ($errors->has('deskripsi'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif

                        <label for="jenis" class="col-md-4 col-form-label">Jenis</label>

                        <input id="jenis"
                            type="text"
                            class="form-control{{ $errors->has('jenis') ? ' is-invalid' : '' }}"
                            name="jenis"
                            value="{{ old('jenis') }}"
                            autocomplete="jenis" autofocus>

                        @if ($errors->has('jenis'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('jenis') }}</strong>
                            </span>
                        @endif

                        <label for="harga" class="col-md-4 col-form-label">Harga</label>

                        <input id="harga"
                            type="text"
                            class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}"
                            name="harga"
                            value="{{ old('harga') }}"
                            autocomplete="harga" autofocus>

                        @if ($errors->has('harga'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="row">
                        <label for="gambar" class="col-md-4 col-form-label">Unggah Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar">

                        @if ($errors->has('gambar'))
                            <strong>{{ $errors->first('gambar') }}</strong>
                        @endif
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Tambahkan Bahan Baku</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection