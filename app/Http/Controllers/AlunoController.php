<?php

namespace App\Http\Controllers;

use App\Models\Aluno;

use App\Http\Requests\AlunoFormRequest;
use Exception;
use Illuminate\Support\Facades\Log;

class AlunoController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function read()
    {
        $alunos = Aluno::get();
        return $alunos;
    }


    public function create(AlunoFormRequest $request)
    {
        try {
            $aluno = new Aluno();

            $aluno->nome = $request->nome;
            $aluno->numero_matricula = $request->numero_matricula;

            $aluno->save();
        } catch (Exception $e) {
            Log::error('Erro na suaFuncao: ' . $e->getMessage());
            return response()->json(['error' => 'Ocorreu um erro.'], 500);
        }


        dd($aluno);
    }
}
