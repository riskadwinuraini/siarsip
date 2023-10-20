<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFile extends Model
{
    use HasFactory;
    protected $table = 'user_file';
    protected $fillable =[
        'user_id',
        'type_file_id',
        'file',
    ];
}
