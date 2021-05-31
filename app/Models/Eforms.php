<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eforms extends Model
{
    use HasFactory;
    protected  $guarded=[];
    public function employeeDetail(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
