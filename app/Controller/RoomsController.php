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

use function Validators_pack\validation;


class RoomsController {

    public function overallPlaces(Request $request){
        $builds = Building::all();
        return (new View())->render('rooms.overall_places', ['builds'=>$builds]);
    }

    public function getter(Request $request){
        $builds = Building::all();
        return (new View())->render('rooms.getter', ['builds'=>$builds]);
        
    }

    public function add(Request $request){
        $rooms = Rooms::all();
        $buildings = Building::all();
        $types=Types::all();

        if($request->method =="POST"){ 
            $validator = validation($request->all(), [
                'name' => ['required'],
                'area' => ['required', 'number','pos'],
                'places' => ['required', 'number', 'pos']
            ], [
                'required' => 'Поле :field пусто',
                'number' => 'Поле :field принимает только целые числа',
                'pos' => 'Поле :field должно быть ПОЛОЖИТЕЛЬНЫМ числом',
            ],
            app()->settings->app['validators'] ?? []
            );
            if($validator->fails()){
                return (new View())->render('rooms.add', ['rooms'=>$rooms,
                'buildings'=>$buildings,
                'types'=>$types,
                'message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }else{
                Rooms::create($request->all());
            }
        }
        
        return (new View())->render('rooms.add', ['rooms'=>$rooms,
            'buildings'=>$buildings,
            'types'=>$types]);
        
    }

    public function overallArea(Request $request){
        if($request->method =="POST"){
            $builds = Building::all();
            $rooms = Rooms::all();
            return (new View())->render('rooms.overall_area', ['rooms'=>$rooms ,'builds'=>$builds, 'data'=>$_POST]);
        }else{
            $builds = Building::all();
            $rooms = Rooms::all();
            return (new View())->render('rooms.overall_area', ['rooms'=>$rooms , 'builds'=>$builds]);
        }
    }
}