<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['name'];
=======
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
    ];
>>>>>>> ba2a9a571c11f5b8b536f0a0a32be86772368c96
}
