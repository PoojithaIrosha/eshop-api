<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'brand' => $this->brand,
            'category' => $this->category,
            'price' => $this->price,
            'active' => $this->active,
        ];
    }

    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->setData($this->toArray($request));
    }


}
