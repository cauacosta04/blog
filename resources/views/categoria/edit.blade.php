@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria - EDIT</div>

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

               
               
                <form action="{{ url('categoria/' . $categoria->id) }}" method="post">
                    @method('PUT')
                 @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $categoria->nome }} "class="form-control"> 
                </div>
                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </form>

               
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
