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
@endsection
