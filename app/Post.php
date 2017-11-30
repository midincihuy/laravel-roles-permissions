<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
      'user_id', 'title', 'body',
  ];

  public function creator()
  {
    return $this->BelongsTo(User::class, 'user_id');
  }
}
