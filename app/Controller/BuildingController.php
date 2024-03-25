<?php

namespace Controller;

use Model\User;
use Model\Building;
use Model\Types;
use Model\Rooms;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

use Src\Validator\Validator;

class BuildingController {
    public function add(Request $request){
        $posts = Building::all();

        if($request->method =="POST"){
            $validator = new Validator($request->all(), [
                'adress' => ['required'],
                ],[
                'required' => 'Поле :field пусто',
            ]);
            if($validator->fails()){
                return (new View())->render('building.add', ['posts'=>$posts,
                    'message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }else{
                Building::create($request->all());
            }
        }

        return (new View())->render('building.add', ['posts'=>$posts]);
    }
}
