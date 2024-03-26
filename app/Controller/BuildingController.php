<?php

namespace Controller;

use Model\User;
use Model\Building;
use Model\Types;
use Model\Rooms;
use Src\View;
use Src\Request;
use Src\Settings;
use Src\Auth\Auth;

use Src\Validator\Validator;

class BuildingController {
    public function add(Request $request){
        $posts = Building::all();

        if($request->method =="POST"){
            $validator = new Validator($request->all(), [
                'adress' => ['required'],
                'photo'=>['required'],
                ],[
                'required' => 'Поле :field пусто',
            ]);
            if($validator->fails()){
                return (new View())->render('building.add', ['posts'=>$posts,
                    'message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }else{
                $imageContent = file_get_contents($_FILES['photo']['tmp_name']);
                Building::create(array_merge($request->all(), ['photo' => $imageContent]));

                // Building::create($request->all());
            }
        }
        return (new View())->render('building.add', ['posts'=>$posts]);
    }

    public function findImage(Request $request){
        $posts = Building::all();
        $real = __DIR__;
 
        if($request->method == 'POST'){
            $img=Building::where('id',(int)($_POST['fimg']))->get();
            $image = time();
            $file = 'images/' . $image . '.jpg';
            $image.='.jpg';

            if (!file_exists('images') || !is_dir('images')){
                mkdir('images', 0755, true);
            }

            file_put_contents($file, $img[0]->photo);
            

            return (new View())->render('building.findImage', ['message'=>$_POST['fimg'],
             'image'=>$image,
              'real'=>$real,

            ]);
        }
        return (new View())->render('building.findImage', ['real'=>$real,]);
    }
}
