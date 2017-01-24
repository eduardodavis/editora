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

                @include('livros._form')

                {!! Html::openFormGroup() !!}
                    {!! Button::primary('Salvar Livro')->submit() !!}
                    {!! Button::primary('Cancelar')->asLinkTo(\URL::previous()) !!}
                {!! Html::closeFormGroup() !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection