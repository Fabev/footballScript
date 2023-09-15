<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    const players = [
        'abrusci', 'antonicelli', 'bruno', 'capussela', 'cardinale', 'carnevale', 'carnevale-d', 'cicero', 'colaianni', 'farella', 'fazio',
        'giannini', 'lagravinese', 'laneve', 'leo', 'linzalone', 'mangiallardo', 'mastrovito', 'miale', 'napoletano', 'pastore', 'racano',
        'sciavilla', 'tafuni',  'tassielli-m', 'tassielli-v', 'tisci', 'trotti', 'vasco', 'ventura'
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function files(){
        return view('files');
    }

    public function startingEleven(){
        $players = self::players;
        return view('startingEleven', compact('players'));
    }
}
