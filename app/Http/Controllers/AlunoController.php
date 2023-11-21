<?php

namespace App\Http\Controllers;

use App\Models\Aluno;

use App\Http\Requests\AlunoFormRequest;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\AlunoResource;

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
        $aluno = new Aluno();

        $aluno->nome = $request->nome;
        $aluno->numero_matricula = $request->numero_matricula;

        if ($aluno->save() == false) {
            Log::error('Erro ao salvar aluno no banco de dados');
            return response()->json(['error' => 'Ocorreu um erro ao salvar aluno.'], 500);
        }

        return new AlunoResource($aluno);
    }

    public function update(AlunoFormRequest $request)
    {
        $aluno = new Aluno();
    }
}
