<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TqrcodeRessource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'shorttitle' => $this->shorttitle,
            'text' => $this->text,
            'recomended' => $this->recomended,
            'promotion' => $this->promotion,
            'social' => $this->social,
            'product' => $this->product,
            'business' => $this->business,
            'personal' => $this->personal,
            'photo' => asset('storage/'.$this->photo)
        ];
    }
}
