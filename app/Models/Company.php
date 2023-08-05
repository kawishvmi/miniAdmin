<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
    use Notifiable;
    use HasFactory;
    
    protected $table = 'companies';

    protected $fillable = ['name', 'email', 'logo', 'website'];
}
