<?php

namespace Controller;

use Model\User;
use Model\Building;
use Model\Types;
use Model\Rooms;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class BuildingController {
    public function add(Request $request){
        if($request->method =="POST" && Building::create($request->all())){
            $posts = Building::all();
            return (new View())->render('building.add', ['posts'=>$posts]);
        }else{
            $posts = Building::all();
            return (new View())->render('building.add', ['posts'=>$posts]);
        }
    }
}
