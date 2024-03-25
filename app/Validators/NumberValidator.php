<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class NumberValidator extends AbstractValidator
{

   protected string $message = 'Field :data must be number!';

   public function rule(): bool
   {
       return (int)($this->value);
   }
}
