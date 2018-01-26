<?php

namespace yoda\Repositories;

use Illuminate\Http\UploadedFile;
 
interface PhotosRepositoryInterface
{
  public function save(UploadedFile $image);
}
