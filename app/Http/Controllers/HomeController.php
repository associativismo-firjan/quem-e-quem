<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = collect([
            [
                'syndicate' => 'SINDPAES',
                'president' => 'Arthur Pinheiro',
                'regional' => 'Firjan Caxias',
                'photo_name' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN0EvP_9m2dfE6JvA61lFRctFY9xSGk7NYjC74VpztX-fp_LxpHA&s'
            ],
            [
                'syndicate' => 'SINDPAES',
                'president' => 'Arthur Pinheiro',
                'regional' => 'Firjan Caxias',
                'photo_name' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN0EvP_9m2dfE6JvA61lFRctFY9xSGk7NYjC74VpztX-fp_LxpHA&s'
            ],
            [
                'syndicate' => 'SINDPAES',
                'president' => 'Arthur Pinheiro',
                'regional' => 'Firjan Caxias',
                'photo_name' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN0EvP_9m2dfE6JvA61lFRctFY9xSGk7NYjC74VpztX-fp_LxpHA&s'
            ],
            [
                'syndicate' => 'SINDPAES',
                'president' => 'Arthur Pinheiro',
                'regional' => 'Firjan Caxias',
                'photo_name' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN0EvP_9m2dfE6JvA61lFRctFY9xSGk7NYjC74VpztX-fp_LxpHA&s'
            ]
        ]);
        
        return view('home', ['Items' => $collection]);
    }
}
