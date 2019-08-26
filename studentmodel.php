<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    /**
     * @return array
     */
    public function hasmany(){
        return $this->$this->hasmany(App/book);

    }


    protected $fillable = ['id', 'name', 'email' , 'password'];



}
