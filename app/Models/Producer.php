<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    use HasFactory;
     public $timestamps = false; //set time to false
    protected $fillable = [
    	'producerName'
    ];
    protected $primaryKey = 'producerID';
 	protected $table = 'producers';
}
