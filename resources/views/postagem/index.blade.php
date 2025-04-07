@extends('adminlte::page')

                    @section('content')
                    <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-md-8">
                    <div class="card">
                    <div class="card-header">Postagem</div>
                    <div class="card-body">
                    <a class="btn btn-success" href="{{ url('postagem/create') }}">CRIAR</a>
                    @if (session('message'))
                    <div class="alert alert-success">
                    {{ session('message') }}
                    </div>
                    @endif
                
                 
                        <script>
                function ConfirmDelete() {
                    return confirm('Tem certeza que deseja excluir este registro?');
                }
            </script>

            <a href="{{ URL::to('produto/create') }}">
                <button type="button" class="btn btn-block btn-success btn-sm">Criar</button>
            </a>



                    <table class="table">
    <thead>
        <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Título</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postagens as $postagem)
                        <tr>
                            <td>{{ $postagem->id }}</td>
                            <td>{{ $postagem->categoria->nome }}</td>
                            <td>{{ $postagem->titulo }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ url('postagem/' . $postagem->id) }}">Visualizar</a>
                                <a class="btn btn-warning" href="{{ url('postagem/' . $postagem->id . '/edit') }}">Editar</a>
                                <form action="{{ url('postagem/'. $postagem->id) }}" method="post" onsubmit='return ConfirmDelete()'>
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">EXCLUIR</button>
                                </form>


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
