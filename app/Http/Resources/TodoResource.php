<?php

namespace App\Http\Resources;

use App\Models\Tag;
use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    private ?Tag $addedTag = null;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "body" => $this->body,
            "done" => $this->done,
            "user_tag" => $this->user_tag,
            "tags" =>
                null === $this->addedTag
                    ? TagCollection::make($this->whenLoaded("tags"))
                    : collect(["data" => [$this->addedTag]]),
        ];
    }

    public function addTag(Tag $tag): self
    {
        $this->addedTag = $tag;
        return $this;
    }
}
