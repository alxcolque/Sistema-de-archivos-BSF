<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'filename',
        'fileurl',
        'filetype',
        'filesize',
        'user_id'
    ];
    /* Many to one */
    publiC function user(){
        return $this->belongsTo(User::class);
    }
}
