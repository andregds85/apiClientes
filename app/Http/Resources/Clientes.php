<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Clientes extends JsonResource
{

    public function toArray($request)
    {
       
       
        return parent::toArray($request);

        return [
            'id' => $this->id,
            'nome' => $this->titulo,
            'telefone' => $this->telefone,
            'email' => $this->email

          ];

    }
}
