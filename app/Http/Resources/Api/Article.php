<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
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

        // specific show
        return [
          'id'    =>  $this->id,
          'title' =>  $this->title,
          'body'  =>  $this->body
        ];
    }

    // add custom json
    public function with($request)
    {
      return [
        'version' => '1.0.0',
        'author_url'  =>  url('http:localhost:8000')
      ];
    }
}
