<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Recuperacion extends Model
{
    protected $fillable = [
        'descripciòn', 'fecha','latitud','longitud',];
    
}