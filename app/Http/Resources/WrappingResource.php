<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WrappingResource extends JsonResource
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
            'wrapping_id'       =>$this->id,
            'wrapping_category' =>$this->wrapping_category,
            'wrapping_price'    =>$this->price,
        ];
    }
}
