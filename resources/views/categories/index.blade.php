@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>Lista de Categorias</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Nova Categoria</a>
        <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td> <ul class-"list-inline">
                            <li>
                                <a href="{{route('categories.edit',['category' => $category->id])}}">Editar</a>
                            </li>
                            <li>
                                <?php $deleteForm = "delete-form-{$loop->index}"; ?>
                                <a href="{{route('categories.destroy',['category'=>$category->id])}}"
                                onclick="event.preventDefault();document.getElementById('{{$deleteForm}}').submit();">Excluir</a>
                                {!! Form::open(['route' => ['categories.destroy', 'category' => $category->id], 'method' => 'DELETE', 'id' => $deleteForm]) !!}
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

            {{ $categories->links() }}
    </div>
    @endsection