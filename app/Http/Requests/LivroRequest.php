<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LivroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $id = Auth::id();
        $livro = $this->route('livro');
        $author = $livro->user_id;
        return $author == $id ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $livro = $this->route('livro');
        $id  = $livro ? $livro->id : NULL;

        return [
            'title' => "required|max:255|unique:livros,title,$id",
            'subtitle' => 'max:255',
            'price' => 'required'
        ];
    }
}
