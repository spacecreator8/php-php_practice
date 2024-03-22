<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
   use HasFactory;
   public $timestamps = false;
   protected $table = 'Types';
   protected $fillable = [
      'kind',
   ];

   public function rooms(){
      return $this->hasMany(Rooms::class, 'rooms_id', 'id');
   }
}
