<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FaturaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'clienteId' => $this->cliente_id,
            'amount' => $this->amount,
            'status' => $this->status,
            'billed_date' => $this->billed_date,
            'paid_date' => $this->paid_date
        ];
    }
}
//             $table->id();
//             $table->integer('cliente_id');
//             $table->integer('amount');
//             $table->string('status');  //Billed, Paid, Void
//             $table->dateTime('billed_date');
//             $table->dateTime('paid_date')->nullable();
//             $table->timestamps();