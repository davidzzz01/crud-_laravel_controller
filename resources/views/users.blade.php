@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: deepskyblue; color: white;">
                        <h2 class="text-center">Users</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover mt-3">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->nome}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->telefone}}</td>
                                    <td>
                                        <a href="{{route('users.destroy', ['user'=>$user->id])}}"> <i style="color:red;" class="fa-solid fa-trash"></i></a>
                                        <a href="{{route('users.edit', ['user' => $user->id])}}"> <i style="color:deepskyblue;" class="fa-solid fa-pen"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
