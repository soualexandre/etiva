<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlunoResource extends JsonResource
{

    public function withResponse($request, $response)
    {
        $response->setData($this->toArray($request));

        parent::withResponse($request, $response);
    }

    public function toArray($request)
    {
        return [
            'nome' => $this->nome,
            'numero_matricula' => $this->numero_matricula,
        ];
    }
}
