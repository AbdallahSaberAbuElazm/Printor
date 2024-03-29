<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FileResource extends JsonResource
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
            'file_id'  => $this->id,
            'file_name' => $this->name,
            'file_path' => $this->path,
            'file_page' =>'printor-app.epizy.com/laravel/storage/app/public/public/files' . '/' . $this->page,
        ];
    }
}
