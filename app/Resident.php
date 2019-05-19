<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Resident extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected  $table = 'residents';

    protected $fillable = [
        'name', 'lastname', 'apartment_id', 'contact', 'email'
    ];


}
