@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="{{route('user-list')}}" class="text-center thumbnail">
                Usuarios
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
