<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Router extends Model
{
    protected $fillable = [
        'sap_id', 'hostname','loopback','macaddress','created_at','updated_at'
    ];  
}
