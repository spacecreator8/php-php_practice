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

    public function overallPlaces(Request $request){
        $builds = Building::all();
        return (new View())->render('rooms.overall_places', ['builds'=>$builds]);
    }

    public function getter(Request $request){
        $builds = Building::all();
        return (new View())->render('rooms.getter', ['builds'=>$builds]);
        
    }

    public function add(Request $request){
        if($request->method =="POST" && Rooms::create($request->all())){
            $rooms = Rooms::all();
            $buildings = Building::all();
            $types=Types::all();
            return (new View())->render('rooms.add', ['rooms'=>$rooms,
                'buildings'=>$buildings,
                'types'=>$types]);
        }else{
            $rooms = Rooms::all();
            $buildings = Building::all();
            $types=Types::all();
            return (new View())->render('rooms.add', ['rooms'=>$rooms,
                'buildings'=>$buildings,
                'types'=>$types]);
        }
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