<?php  
namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;
// add transformers postapi
use App\Transformers\PostapiTransformer;

/**
 * 
 */
class UserTransformer extends TransformerAbstract
{
  // add include available
  protected $availableIncludes = [
    'postapis'
  ];

  public function transform(User $user)
  {
    return [
      'id'          =>  $user->id,
      'name'        =>  $user->name,
      'email'       =>  $user->email,
      'registered'  =>  $user->created_at->diffForHumans(),
      'token'       =>  $user->api_token,
    ];
  }

  // show post 
  public function includePostapis(User $user)
  {
    $postapis = $user->postapis()->LatestFirst()->get();
    // $postapis = $user->postapis;
    return $this->collection($postapis, new PostapiTransformer);
  }
}

?>