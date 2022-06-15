<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{   
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            // 'id' => $this->id,
            // 'user_id' => $this->user_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'todos' => TodoCollection::make($this->whenLoaded('todos')),
        ];
    }
}
