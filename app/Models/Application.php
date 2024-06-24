<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
     protected $guarded=[];

      function user(){
        return $this->belongsTo(User::class);
    }
      function job(){
        return $this->belongsTo(JobModel::class);
    }
}
