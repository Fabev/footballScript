<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class HomeController extends Controller
{
    public function generate(Request $request){
        $img = ImageManagerStatic::make(public_path('img/base.jpeg'));
        $img->text($request->home, 305, 930, function($font) {
            $font->file(public_path('fonts/Roboto.ttf'));
            $font->size(140);
            $font->color('#e1e1e1');
            $font->align('center');
            $font->valign('bottom');
            $font->angle(0);
        });
        $img->text($request->away, 435, 930, function($font) {
            $font->file(public_path('fonts/Roboto.ttf'));
            $font->size(140);
            $font->color('#e1e1e1');
            $font->align('center');
            $font->valign('bottom');
            $font->angle(0);
        });
        $img->save(public_path('img/base.jpg'));
    }
}
