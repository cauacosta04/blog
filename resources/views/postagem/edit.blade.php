@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - EDIT</div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ url('postagem/' . $postagem->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="categoria_id">Categoria:</label>
                            <select name="categoria_id" id="categoria_id" class="form-control">
                                @foreach ($categorias as $value)
                                    <option value="{{ $value->id }}" {{ $value->id == $postagem->categoria_id ? 'selected' : '' }}>
                                        {{ $value->nome }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="titulo">Título:</label>
                            <input 
                                type="text" 
                                name="titulo" 
                                id="titulo" 
                                class="form-control" 
                                value="{{ old('titulo', $postagem->titulo) }}" 
                                required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="descricao">Descrição:</label>
                            <textarea 
                                name="descricao" 
                                id="descricao" 
                                rows="5" 
                                class="form-control" 
                                required>{{ old('descricao', $postagem->descricao) }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
