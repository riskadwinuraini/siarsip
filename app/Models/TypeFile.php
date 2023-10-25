<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeFile extends Model
{
    use HasFactory;

    protected $table = 'type_files';

    protected $fillable = [
        'code_file','name','status'
    ];
}
