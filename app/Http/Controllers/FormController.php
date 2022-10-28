<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Form;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class FormController extends Controller
{
    //

    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        $form = new Form;

        $form->nome = $request->nome;
        $form->nome_artistico = $request->nome_artistico;
        $form->cpf = $request->cpf;
        $form->data_nascimento = $request->data_nascimento;
        $form->nacionalidade = $request->nacionalidade;
        $form->naturalidade = $request->naturalidade;
        $form->email = $request->email;
        $form->endereco = $request->endereco;
        $form->complemento = $request->complemento;
        $form->estado = $request->estado;
        $form->bairro = $request->bairro;
        $form->cep = $request->cep;
        $form->naturalidade = $request->naturalidade;
        $form->estado = $request->estado;
        $form->cidade = $request->cidade;
        $form->telefone = $request->telefone;
        $form->vinculo_institucional = $request->vinculo_institucional;
        $form->descricao_vinculo = $request->descricao_vinculo;

        $form->save();

        return redirect('/registered')->with('msg', 'Cadastro realizado com sucesso!');
        //return view('forms.registered');
    }

    public function index(){

        //return redirect('/registered')->with('msg', 'Evento excluído com sucesso!');
        return view('forms.registered');

    }



}
