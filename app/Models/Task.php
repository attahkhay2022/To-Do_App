<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //relation with user model[1:M]
    
    public function user(){
       return $this->belongsTo(user::class); 
    }
}
