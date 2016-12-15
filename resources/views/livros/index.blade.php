@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>Lista de Livros</h1>
        <a href="{{ route('livros.create') }}" class="btn btn-primary">Novo Livro</a>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Subtítulo</th>
                    <th>Preço</th>
                </tr>
                </thead>
                <tbody>
                @foreach($livros as $livro)
                    <tr>
                        <td>{{ $livro->id }}</td>
                        <td>{{ $livro->title }}</td>
                        <td>{{ $livro->subtitle }}</td>
                        <td>{{ $livro->price }}</td>
                        <td> <ul class-"list-inline">
                            <li>
                                <a href="{{route('livros.edit',['livro' => $livro->id])}}">Editar</a>
                            </li>
                            <li>
                                <?php $deleteForm = "delete-form-{$loop->index}"; ?>
                                <a href="{{route('livros.destroy',['livro'=>$livro->id])}}"
                                   onclick="event.preventDefault();document.getElementById('{{$deleteForm}}').submit();">Excluir</a>
                                {!! Form::open(['route' => ['livros.destroy', 'livro' => $livro->id], 'method' => 'DELETE', 'id' => $deleteForm]) !!}
                                {!! Form::close() !!}
                            </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $livros->links() }}
        </div>
@endsection