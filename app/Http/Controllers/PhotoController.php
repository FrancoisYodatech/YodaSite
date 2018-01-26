<?php

namespace yoda\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\UploadedFile;

use yoda\Http\Requests\ImageRequest;
use yoda\Repositories\PhotosRepositoryInterface;

class PhotoController extends Controller
{
    public function create(){
      return view('photo');
    }

    public function store(ImageRequest $request, PhotosRepositoryInterface $photosRepositoy){

      $photosRepositoy->save($request->imagePost);

      return view('validatePhoto');
    }
}
