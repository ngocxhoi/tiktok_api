<?php

namespace App\Services;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;


class FileService
{
  public function updateImage($model, $request)
  {
    $file = $request->file('image');
    $image = (new ImageManager(new Driver))->read($file);

    if (!empty($model->image)) {
      $currentImage = public_path() . $model->image;

      if (file_exists($currentImage) && $currentImage != public_path() . '/user-placeholder.png') {
        unlink($currentImage);
      }
    }

    $extension = $file->getClientOriginalExtension();

    $image->crop(
      $request->width,
      $request->height,
      $request->left,
      $request->top,
    );

    $name = time() . '.' . $extension;
    $image->save(public_path() . '/files/' . $name);
    $model->image = '/files/' . $name;

    return $model;
  }

  public function addVideo($model, $request)
  {
    $video = $request->file('video');
    $extension = $video->getClientOriginalExtension();
    $name = time() . '.' . $extension;
    $video->move(public_path() . '/files/', $name);
    $model->video = '/files/' . $name;

    return $model;
  }
}
