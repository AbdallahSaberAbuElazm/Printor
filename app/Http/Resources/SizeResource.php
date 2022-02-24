<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SizeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'size_id'           =>$this->id,
            'size'              =>$this->size,
            'price_black_white' =>$this->price_black_white,
            'price_color'       =>$this->price_color,
        ];
    }
}
