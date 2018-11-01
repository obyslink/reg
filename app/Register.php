<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $table = 'register';


        public $fillable = [
        'name', 
        'email', 
        'telephone',
        'surname',
        'height',
        'dob',
        'country', 
        'gender', 
        'talent', 
        'language', 
        'link', 
        'image', 
        'Question1', 
        'Question2', 
        'Question3', 
        'message'
    ];

}
