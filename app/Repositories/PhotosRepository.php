<?php

namespace yoda\Repositories;

use Illuminate\Http\UploadedFile;

class PhotosRepository implements PhotosRepositoryInterface
{
    public function save(UploadedFile $image)
    {
        $image->store(config('images.path'), 'public');
    }
}
