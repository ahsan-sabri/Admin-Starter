@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <router-view></router-view>

            <vue-progress-bar></vue-progress-bar>
        </div><!-- /.container-fluid -->
    </div>
@endsection
