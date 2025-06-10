@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Alterar a senha de <strong>{{ auth()->user()->name }}</strong>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success mt-2">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ url('admin/updateSenha') }}" method="post" class="p-3">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="password_old">Senha antiga:</label>
                        <input type="password" name="password_old" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password_new">Senha nova:</label>
                        <input type="password" name="password_new" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password_new2">Senha nova (repetir):</label>
                        <input type="password" name="password_new2" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">ENVIAR</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection