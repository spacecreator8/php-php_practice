<?php

namespace Controller;

use Model\User;
use Model\Building;
use Model\Types;
use Model\Rooms;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class TypesController{
    public function add(Request $request){
        if($request->method =="POST" && Types::create($request->all())){
            $posts = Types::all();
            return (new View())->render('types.add', ['posts'=>$posts]);
        }else{
            $posts = Types::all();
            return (new View())->render('types.add', ['posts'=>$posts]);
        }
    }
}