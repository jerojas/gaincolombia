<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
   public $fillable = [
    'asistente_id',
    'first_name',
    'last_name',
    'document',
    'profesion',
    'email',
    'phone',
    'city',
    'state',
    'type_assist'];
}
