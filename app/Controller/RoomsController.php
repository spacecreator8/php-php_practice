<?php

namespace Controller;

use Model\User;
use Model\Building;
use Model\Types;
use Model\Rooms;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class RoomsController {
    public function add(Request $request){
        if($request->method =="POST" && Rooms::create($request->all())){
            $posts = Rooms::all();
            return (new View())->render('rooms.add', ['posts'=>$posts]);
        }else{
            $posts = Rooms::all();
            return (new View())->render('rooms.add', ['posts'=>$posts]);
        }
    }

    public function overallArea(Request $request){
        if($request->method =="POST"){
            $posts = Building::all();
            return (new View())->render('rooms.overall_area', ['posts'=>$posts, 'data'=>$_POST]);
        }else{
            $posts = Building::all();
            return (new View())->render('rooms.overall_area', ['posts'=>$posts]);
        }
    }
}