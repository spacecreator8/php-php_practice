<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
   use HasFactory;
   public $timestamps = false;
   protected $table = "Rooms";
   protected $fillable = [
      'name',
      'type',
      'area',
      'build',
   ];

   public function type(){
      return $this->belongsTo(Types::class, 'type', 'id');
   }

   public function build(){
      return $this->belongsTo(Building::class, 'build', 'id');
   }
}
