@extends('layouts.app')

@extends('layouts.sidebar_template.sidebar_example')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="grid grid-cols-12" style="height: 92vh">
    @include('layouts.partial.sidebar')
    <div class="col-span-10 bg-gray-100 shadow-inner px-5 py-5">
        <p class="text-xl"> Hello, Admin! </p>
    </div>
</div>  --}}

@endsection
