<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function catagory(){
    	return $this->belongsTo('\App\Models\Catagory');
    }
    public function user(){
    	return $this->belongsTo('\App\Models\User');
    }
}
