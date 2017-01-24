@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Livros</h1>
        {!! Button::primary('Novo Livro')->asLinkTo(route('livros.create')) !!}
        <div class="row">
            {!!
                Table::withContents($livros->items())->striped()
                 ->callback('Ações', function($field,$livro){
                  $linkEdit = route('livros.edit',['livro' => $livro->id]);
                  $linkDestroy = route('livros.destroy',['livro' => $livro->id]);
                  $deleteForm = "delete-form-{$livro->id}";
                  $form = Form::open(['route' =>
                                        ['livros.destroy', 'livro' => $livro->id],
                                        'method' => 'DELETE','id' => $deleteForm, 'style' => 'display:none']).
                                        Form::close();
                  $anchorDestroy = Button::link(Icon::trash())
                                    ->asLinkTo($linkDestroy)
                                    ->addAttributes([
                                        'onclick' => "event.preventDefault();document.getElementById(\"{$deleteForm}\").submit();"
                                    ]);
                  return "<ul class=\"list-inline\">".
                            "<li>".Button::link(Icon::pencil())->asLinkTo($linkEdit)."</li>".
                            "<li>".$anchorDestroy."</li>".
                            "</ul>".
                            $form;
                 })
            !!}

            {{ $livros->links() }}
        </div>
@endsection