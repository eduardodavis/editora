@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Nova Categoria</h3>

            {!! Form::open(['route' => 'categories.store', 'class' => 'form']) !!}

                @include('categories._form')

                {!! Html::openFormGroup() !!}
                    {!! Button::primary('Criar Categoria')->submit() !!}
                    {!! Button::primary('Cancelar')->asLinkTo(\URL::previous()) !!}
                {!! Html::closeFormGroup() !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection