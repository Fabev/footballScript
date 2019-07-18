<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class HomeController extends Controller
{
    public function generate(Request $request){
        $img = ImageManagerStatic::make(public_path('img/convocati.png'));
        $img->text("CONVOCATI", 86, 130, function($font) {
            $font->file(public_path('fonts/Roboto.ttf'));
            $font->size(130);
            $font->color('#ffffff');
            $font->align('left');
            $font->valign('bottom');
            $font->angle(0);
        });
        $img->insert(public_path('img/divider.png'), 'top-left', 60, 180);
        $img->text("PORTIERI", 86, 230, function($font) {
            $font->file(public_path('fonts/Roboto.ttf'));
            $font->size(50);
            $font->color('#ffffff');
            $font->align('left');
            $font->valign('bottom');
            $font->angle(0);
        });
        $img->save(public_path('img/convocati.jpg'));
    }
}
