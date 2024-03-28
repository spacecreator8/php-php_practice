<?php
return [
   //Класс аутентификации
   'auth' => \Src\Auth\Auth::class,
   //Клас пользователя
   'identity' => \Model\User::class,
   //Классы для middleware
   'routeMiddleware' => [
       'auth' => \Middlewares\AuthMiddleware::class,
   ],
   'routeAppMiddleware' => [
        'trim' => \Middlewares\TrimMiddleware::class,
        'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
        'csrf' => \Middlewares\CSRFMiddleware::class,
   ],
 
   'validators' => [
    'required' => Validators_pack\Validators\RequireValidator::class,
    // 'unique' => \Validators\UniqueValidator::class,
    'number'=>Validators_pack\Validators\NumberValidator::class,
    'length'=> Validators_pack\Validators\StrLenValidator::class,
    'pos'=> Validators_pack\Validators\PositiveNumbValidator::class,
   ],

];
