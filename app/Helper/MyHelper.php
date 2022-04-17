<?php

namespace App\Helper;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MyHelper{

    public static function storeImage(Request $request, Model $model){
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = $file->store('images');
            $model->image()->save(
                Image::make([
                    'path'=>$name
                ])
            );
        }
    }

    public static function updateImage(Request $request, Model $model){
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = $file->store('images');
            if ($model->image) {
                Storage::delete($model->image->path);
                $model->image->path = $name;
                $model->image->save();
            }else{
                $model->image()->save(
                    Image::make([
                        'path'=>$name
                    ])
                );
            }
        }
        $model->save();
    }
}
