<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $resource = $this->resource;

        return [
            'company_name' => $resource->company_name,
            'created_at'   => $resource->created_at->format('Y-m-d'),
            'country'      => $resource->country->country_name
        ];

    }
}
