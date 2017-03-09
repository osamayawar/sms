<?php

namespace SMS;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'address', 'contact', 'user_id'];

    protected $hidden = ['remember_token'];
}
