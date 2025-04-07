@extends('adminlte::page')

                    @section('content')
                    <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-md-8">
                    <div class="card">
                    <div class="card-header">Categoria</div>
                    <div class="card-body">
                    <a class="btn btn-success" href="{{ url('categoria/create') }}">CRIAR</a>
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
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nome }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ url('categoria/' . $categoria->id) }}">Visualizar</a>
                                <a class="btn btn-warning" href="{{ url('categoria/' . $categoria->id . '/edit') }}">Editar</a>
                                <form action="{{ url('categoria/'. $categoria->id) }}" method="post" onsubmit='return ConfirmDelete()'>
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
