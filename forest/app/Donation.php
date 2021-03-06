<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
		'amount',
		'message',
		'email',
		'name',
		'status',
		'public'
    ];
}
