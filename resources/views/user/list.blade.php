@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-condensed">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Tipo de usuário</th>
            <th>Status</th>
            <th></th>
        </thead>

        <tbody>
            @foreach ($Users as $User)
            <tr>
                <td>{{$User->id}}</td>
                <td>{{$User->name}}</td>
                <td>{{$User->email}}</td>
                <td>{{Helper::get_roles($User->role, 'label')}}</td>
                <td>{{$User->email}}</td>
                <td>
                    <p><span class="label label-{{$User->status ? 'success' : 'danger'}}">{{$User->status ? 'ATIVO' : 'DESATIVADO'}}</span></p>
                </td>
                <td>
                    <div class="btn-group dropdown pull-right">
                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
                        </button>
                        <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('user-profile', ['user_id' => $User->id])}}">Perfil</a>
                        </li>
                        <li>
                            <a href="#"  class="user_update_status" data-status="{{!$User->active}}" data-user="{{$User->id}}">
                                {{!$User->status ? 'Ativar' : 'Desativar'}} usuário
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