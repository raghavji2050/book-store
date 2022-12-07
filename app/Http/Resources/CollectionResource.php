<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $books = BookResource::collection($this->books->where('status', true));

        return [
          'title' => $this->title,
          'slug'  => $this->slug,
          'books'  => $books,
        ];
    }
}
