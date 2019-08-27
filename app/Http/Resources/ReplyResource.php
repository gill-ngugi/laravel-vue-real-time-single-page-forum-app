<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            //ID
            'id' => $this->id,
            //Body of reply
            'reply'=> $this->body,
            //user_id 
            'user'=> $this->user->name,
            //created_at
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
