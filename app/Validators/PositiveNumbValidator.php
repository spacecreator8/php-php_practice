<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class PositiveNumbValidator extends AbstractValidator
{

   protected string $message = 'Field :number must be positive!';

   public function rule(): bool
   {
       return (($this->value) >= 0);
   }
}