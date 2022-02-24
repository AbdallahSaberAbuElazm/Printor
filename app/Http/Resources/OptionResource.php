<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OptionResource extends JsonResource
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
            'option_id'            =>$this->id,
            'option_size'          =>new SizeResource($this->sizes),
            'option_color'         =>$this->color,
            'option_side'          =>$this->side,
            'option_layout'        =>$this->layout,
            'option_wrapping'      =>new WrappingResource($this->wrapping),
            'option_note'          =>$this->note,
            'ption_price'          =>$this->price
        ];
    }
}
