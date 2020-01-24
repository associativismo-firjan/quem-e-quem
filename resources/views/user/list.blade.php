@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-condensed">
        <thead>
            <th>id</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Status</th>
            <th></th>
        </thead>

        <tbody>
            @foreach ($Users as $User)
            <tr>
                <td>{{$User->id}}</td>
                <td>{{$User->name}}</td>
                <td>{{$User->email}}</td>
                <td>
                    <p><span class="label label-{{$User->status ? 'success' : 'danger'}}">{{$User->status ? 'ATIVO' : 'DESATIVADO'}}</span></p>
                </td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-option-vertica" aria-hidden="true"></span>
                        </button>
                        <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('user-profile', ['user_id' => $User->id])}}">Perfil</a>
                        </li>
                        <li>
                            <a href="#"  class="user_update_status" data-status="{{!$User->active}}" data-user="{{$User->id}}">
                                {{$User->status ? 'Ativar' : 'Desativar'}}
                            </a>
                        </li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$Users->links()}}
</div>
@endsection