<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'titre' => $this->title,
            'contenu' => $this->content,
            'image' => $this->image,
            'utilisateur' => new UserResource($this->user),
            'categorie' => new CategoryResource($this->category),
            'date_creation' => $this->created_at
        ];
    }
}
