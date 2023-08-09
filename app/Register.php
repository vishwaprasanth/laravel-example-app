<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registers';
    function addNew($data){
        $register = new Register;
        $register->name = $data['name'];
        $register->email = $data['email'];
        $register->password = $data['password'];
        $register->save();
    }

    function getAll(){
        return Register::all();
    }
}
