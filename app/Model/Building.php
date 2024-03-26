<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
   use HasFactory;
   public $timestamps = false;
   protected $table = "Building";
   protected $fillable = [
      'adress',
      'photo',
   ];

   public function rooms(){
      return $this->hasMany(Rooms::class, 'rooms_id', 'id');
   }
}
