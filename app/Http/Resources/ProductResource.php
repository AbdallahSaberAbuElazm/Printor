<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'product_id'    =>$this->id,
            'product_title' =>$this->title,
            'file_id'       =>new FileResource($this->file_id),
            'option'        =>new OptionResource($this->option_id),
            'price'         =>$this->price,
            'no_of_copies'  =>$this->no_of_copies,
        ];
    }
}
