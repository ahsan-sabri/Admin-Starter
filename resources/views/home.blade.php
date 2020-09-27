@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome') }}</div>
                    <div class="card-body">
                        <div class="contailer">
                            <div class="col-12">
                                <div class="title m-b-md">
                                    Welcome to {{ config('app.name') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
