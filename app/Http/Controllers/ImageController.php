<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class ImageController extends Controller
{

    const home_prefix = 'SXI-HOME_';
    const x_modifier = 320;
    const y_modifier = 336;
    const left_margin = 37;
    const top_margin = 178;

    public function generate(Request $request){
        switch ($request->type){
            case 'half-time':
                $results = $this->halfTime($request);
                break;
            case 'full-time':
                $results = $this->fullTime($request);
                break;
            case 'starting_eleven':
                $results = $this->startingEleven($request);
        }

        return view('showResult', compact('results'));
    }

    private function generateTime($imagepath, $home, $away, $type){
        if ($type === 'post'){
            $coordinates = [
              'home' => [
                  'x' => 508,
                  'y' => 983
              ],
              'away' => [
                  'x' => 570,
                  'y' => 983
              ]
            ];
        } else {
            $coordinates = [
                'home' => [
                    'x' => 410,
                    'y' => 1510
                ],
                'away' => [
                    'x' => 485,
                    'y' => 1510
                ]
            ];
        }
        $img = ImageManagerStatic::make($imagepath);
        $img->text($home, $coordinates['home']['x'], $coordinates['home']['y'], function($font) {
            $font->file(public_path('fonts/RevolutionGothic.otf'));
            $font->size(200);
            $font->color('#ffffff');
            $font->align('right');
            $font->valign('bottom');
            $font->angle(0);
        });
        $img->text($away, $coordinates['away']['x'], $coordinates['away']['y'], function($font) {
            $font->file(public_path('fonts/RevolutionGothic.otf'));
            $font->size(200);
            $font->color('#ffffff');
            $font->align('left');
            $font->valign('bottom');
            $font->angle(0);
        });
        $filepath = 'img/half' . uniqid() . '.jpg';
        $img->save(public_path($filepath));
        return $filepath;
    }

    private function halfTime($request){
        return [
            $this->generateTime(public_path('img/half.png'), $request->home, $request->away, 'post'),
            $this->generateTime(public_path('img/half_story.png'), $request->home, $request->away, 'story'),
        ];
    }

    private function fullTime($request){
        return [
            $this->generateTime(public_path('img/full.png'), $request->home, $request->away, 'post'),
            $this->generateTime(public_path('img/full_story.png'), $request->home, $request->away, 'story'),
        ];
    }

    private function summoned(){
        $img = ImageManagerStatic::make(public_path('img/convocati.png'));
        $img->text("CONVOCATI", 86, 130, function($font) {
            $font->file(public_path('fonts/RevolutionGothic.otf'));
            $font->size(130);
            $font->color('#ffffff');
            $font->align('left');
            $font->valign('bottom');
            $font->angle(0);
        });
        $img->insert(public_path('img/divider.png'), 'top-left', 60, 180);
        $img->text("POTTIERRRI", 86, 230, function($font) {
            $font->file(public_path('fonts/RevolutionGothic.otf'));
            $font->size(50);
            $font->color('#ffffff');
            $font->align('left');
            $font->valign('bottom');
            $font->angle(0);
        });
        $img->save(public_path('img/convocati.jpg'));
    }

    private function startingEleven($request){
        $img = ImageManagerStatic::make(public_path('img/starting.png'));
        foreach($request->lineup as $key => $player){
            $x = self::left_margin + ($key % 4 * self::x_modifier);
            $y = self::top_margin + (intval($key / 4) * self::y_modifier);
            $img->insert(public_path('img/players/' . self::home_prefix . $player . '.png'), 'top-left', $x, $y);
        }
        $img->text("SUBS: " . strtoupper(implode(' - ', $request->bench)), 67, 1200, function($font) {
            $font->file(public_path('fonts/RevolutionGothic_It.otf'));
            $font->size(37);
            $font->color('#b5b9ba');
            $font->align('left');
            $font->valign('bottom');
            $font->angle(0);
        });

        $filepath = 'img/lineup_' . uniqid() . '.jpg';
        $img->save(public_path($filepath));
        return [$filepath];
    }
}
