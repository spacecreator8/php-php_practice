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
use Spacecreator8\validators_pack;

use function Validators_pack\validation;



class TypesController{
    public function add(Request $request){
        $posts = Types::all();

        if($request->method =="POST"){
            $validator = validation($request->all(), [
                'kind' => ['required'],
                ],
                [
                'required' => 'Поле :field пусто',
                ],
                app()->settings->app['validators'] ?? []);

            if($validator->fails()){
                return (new View())->render('types.add', ['posts'=>$posts,
                    'message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }else{
                Types::create($request->all());
            }
        }

        return (new View())->render('types.add', ['posts'=>$posts]);
    }
}