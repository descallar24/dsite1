<?php
 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserJob extends Model{
   

   protected $table = 'tblbooks';

// column sa table
   protected $fillable = [
       'fullname','gender','birthday'
   ];

   public $timestamps = false;
   protected $primarykey = 'id';
}
