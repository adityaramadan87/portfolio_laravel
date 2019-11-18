<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Project extends Model
{
  protected $fillable = [
    'title_project', 'category_project', 'image_project'
  ];
}


?>
