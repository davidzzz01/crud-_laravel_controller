@extends('master')

@section('content')
    @extends('master')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header" style="background-color: deepskyblue; color: white;">
                            <h2>Editar Usuário</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('users.update', ['user' => $user]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $user->nome }}" placeholder="Digite o nome">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Digite o email">
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone:</label>
                                    <input type="tel" class="form-control" id="telefone" name="telefone" value="{{ $user->telefone }}" placeholder="Digite o telefone">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection


@endsection
