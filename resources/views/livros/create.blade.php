@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Novo Livro</h3>

            {!! Form::open(['route' => 'livros.store', 'class' => 'form']) !!}

                @include('livros._form')

                {!! Html::openFormGroup() !!}
                    {!! Button::primary('Incluir Livro')->submit() !!}
                    {!! Button::primary('Cancelar')->asLinkTo(\URL::previous()) !!}
                {!! Html::closeFormGroup() !!}

            {!! Form::close() !!}

        </div>
    </div>
@endsection