<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{

     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::get();

        return $alunos;
    }

}
