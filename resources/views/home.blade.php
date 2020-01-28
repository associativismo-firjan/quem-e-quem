@extends('layouts.app')

@section('content')
<div class="container">

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    <div class="row">
        <form action="">
            <div class="form-group col-lg-3">
                <label for="syndicate">Sindicato</label>
                <input type="text" class="form-control" id="syndicate">
            </div>
            <div class="form-group col-lg-3">
                <label for="president">Presidente</label>
                <input type="text" class="form-control" id="president">
            </div>
            <div class="form-group col-lg-3">
                <label for="conselho">Sindicato</label>
                <input type="text" class="form-control" id="conselho">
            </div>
            <div class="form-group col-lg-3">
                <label for="">&nbsp</label>
                <button class="btn btn-primary form-control">Pesquisar</button>
            </div>
        </form>
    </div>

    <div class="row card-container">
        @foreach ($Items as $Item)
        <div class="col-lg-12">
            <div class="card">
                <div class="card-group president_group">
                    <div>
                        <img src="{{$Item['photo_name']}}" alt="">
                    </div>
                    <div>
                        <span class="title">Presidente</span>
                        <p>{{$Item['president']}}</p>
                    </div>
                    {{-- <img src="{{asset('uploads/' . $Item['photo_name'])}}" alt=""> --}}
                </div>
                <div class="card-group">
                    <span class="title">Sindicato</span>
                    <h4>{{$Item['syndicate']}}</h4>
                </div>
                <div class="card-group">
                    <span class="title">Regional</span>
                    <h4>{{$Item['regional']}}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
