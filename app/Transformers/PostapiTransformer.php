<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
// add Models
use App\Models\Api\PostApi;

class PostapiTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(PostApi $postapi)
    {
        return [
          'id'  =>  $postapi->id,
          'content' =>  $postapi->content,
          'published' =>  $postapi->created_at->diffForHumans(),
        ];
    }
}
