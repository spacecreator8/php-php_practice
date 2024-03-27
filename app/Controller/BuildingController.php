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
        if($request->method =='POST'){
            $posts = Building::all();
            $search = mb_strtolower($_POST['fimg']);
            $results = [];
            $images=[];

            $search = explode(' ', $search);
            foreach($search as $srch){
                foreach($posts as $post){
                    $adress=mb_strtolower($post->adress);
                    $arr = explode(' ', $adress);
                    foreach($arr as $key => $value){
                        if($value == $srch){
                            array_push($results, $post);
                            break;
                        }
                    } 
                }
            }

            if (!file_exists('images') || !is_dir('images')){
                mkdir('images', 0755, true);
            }

            foreach($results as $index=>$res){
                $image = time() . $index;
                $file = 'images/' . $image . '.jpg';
                $image.='.jpg';
                file_put_contents($file, $res->photo);

                array_push($images, $image);
            }


            return (new View())->render('building.findImage', ['objects'=>$results,
                                                               'images'=>$images]);

        }
        return (new View())->render('building.findImage', []);
    }
}
