<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Storage;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $featuredImage = $this->images->where('is_featured', true)->first();

        if (!$featuredImage) {
          $featuredImage = $this->images->first();
        }

        return [
          'name'             => $this->name,
          'price'            => $this->price,
          'discounted_price' => $this->discounted_price,
          'stars'            => $this->stars,
          'in_stock'         => $this->in_stock,
          'featured_image'   => $featuredImage ? url(Storage::url($featuredImage->path)) : null
        ];
    }
}
