<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_Form extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];
}
