<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Storage;

class AuthorResource extends JsonResource
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

      $featuredImage = $this->images->where('is_featured', true)->first();

      if (!$featuredImage) {
        $featuredImage = $this->images->first();
      }

      return [
        'title' => $this->name,
        'description'  => $this->description,
        'featured_image' => $featuredImage ? url(Storage::url($featuredImage->path)) : null,
        'books' => $books,
      ];
    }
}
