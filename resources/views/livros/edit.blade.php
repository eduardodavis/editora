@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar Livro</h3>




            {!! Form::model($livro, [
                'route' => ['livros.update','category' => $livro->id],
                'class' => 'form', 'method' => 'PUT'
                ])
             !!}


            <div class="form-group">
                {!! Form::label('title', 'Título') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Salvar Livro', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection