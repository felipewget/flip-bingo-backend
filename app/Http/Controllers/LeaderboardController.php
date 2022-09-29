<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Leaderboard;

class LeaderboardController extends BaseController
{
    
    public function index(){
        return Leaderboard::all()->where('deleted_at', null)->sort('score', 'DESC');
    }

    public function store(){
        
        try {

            $request->validate([
                'name'=> ['required'],
                'score'=> ['required']
            ]);
    
            return Leaderboard::create([
                'name' => $request->post('name'),
                'score' => $request->post('score'),
            ]);

        } catch(\Exception $e){
            echo $e->getMessage();
        }

    }
    
}
