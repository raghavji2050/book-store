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
        $images = $this->images;
        $featuredImage = $images->where('is_featured', true)->first();

        if (!$featuredImage) {
          $featuredImage = $images->first();
        }

        return [
          'id'               => $this->id,
          'name'             => $this->name,
          'price'            => $this->price,
          'discounted_price' => $this->discounted_price,
          'stars'            => $this->stars,
          'sku'              => $this->sku,
          'review_count'     => $this->review_count,
          'in_stock'         => $this->in_stock,
          'description'      => $this->description,
          'featured_image'   => $featuredImage ? url(Storage::url($featuredImage->path)) : null,
          'images'           => ImageResource::collection($images)
        ];
    }
}
